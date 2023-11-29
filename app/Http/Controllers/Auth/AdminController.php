<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function loginform(Request $request)
     {
    return view("auth.adminLogin");
     }
    public function login(Request $request)
   {
    $data = $request->all();

    if (Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])) {
        // Authentication passed, redirect to dashboard or any other route
        return redirect()->route('admin.dashboard');
    }

    // Authentication failed, redirect back with error message
    return redirect()->route('admin.loginform')->with('error', 'Invalid login credentials');
}

    /**
     * Show the form for creating a new resource.
     */
    public function dashboard(Request $request)
    {
        return view("admin.dashboard");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'You Have Logout Success');
    }


    public function showForgotPasswordForm()
    {
    return view('auth.passwords.admin-email');
    }



    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            Session::flash('success', 'Check your email for the password reset link.');
            return redirect()->route('admin.loginform');
        } elseif ($response == Password::INVALID_USER) {
            Session::flash('error', 'The provided email address is not registered.');
        } else {
            Session::flash('error', 'Failed to send the password reset link. Please try again later.');
        }
        return redirect()->back()->withErrors(['email' => trans($response)]);
    }
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.admin-reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function adminResetPassword(Request $request)
    {


        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ], [

            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني يجب أن يكون عنوان بريد إلكتروني صالح',
            'password.required' =>  'كلمة المرور مطلوبة',
            'password.confirmed' => 'كلمة المرور وتأكيد كلمة المرور يجب أن يتطابقان',
            'password_confirmation.required' =>  'تأكيد كلمة المرور مطلوب',
        ]);


        $response = $this->broker()->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                    'remember_token' => \Str::random(60),
                ])->save();
            }
        );
        Log::info('Password reset response: ' . $response);
        if ($response == Password::PASSWORD_RESET) {
            Session::flash('success', 'Your password has been reset successfully.');
            return redirect()->route('admin.loginform');
        } elseif ($response == Password::INVALID_TOKEN) {
            Session::flash('error', 'The password reset token is invalid. Please try again.');
        } elseif ($response == Password::INVALID_USER) {
            Session::flash('error', 'The provided email address is not registered.');
        } else {
            Session::flash('error', 'Failed to reset the password. Please try again later.');
        }

        return back()->withInput();
    }


    protected function broker()
    {
        return Password::broker('admins');
    }
   
}
