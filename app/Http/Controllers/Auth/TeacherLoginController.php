<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TeacherLoginController extends Controller
{





    public function registerform()
    {
   return view("auth.teacherRegister");
    }


    protected function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|string',
            'nationality' => 'required|string',
            'experience' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'note' => 'nullable|string'
        ], [
            'name.required' => 'الاسم مطلوب',
            'name.string' => 'الرجاء إدخال قيمة نصية للإسم',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني يجب أن يكون عنوان بريد إلكتروني صالح',
            'email.unique' => ' هذا البريد مستخدم من قبل',
            'phone.required' => '  الجوال مطلوب',
            'nationality.required' => ' الجنسية مطلوبة',
            'experience.required' => ' سنوات الخبرة مطلوبة',
            'password.required' =>  'كلمة المرور مطلوبة',
            'password.confirmed' => 'كلمة المرور وتأكيد كلمة المرور يجب أن يتطابقان',
            'password_confirmation.required' =>  'تأكيد كلمة المرور مطلوب',
        ]);

        $teacher=new Teacher();
        $teacher->name=$request->name;
        $teacher->email=$request->email;
        $teacher->phone=$request->phone;
        $teacher->nationality=$request->nationality;
        $teacher->experience=$request->experience;
        $teacher->password = Hash::make($request->password);
        $teacher->note=$request->note;
        $teacher->save();
        // dd($teacher);
        Session::flash('success', 'تم إنشاء الحساب بنجاح ! قم بفحص بريدك الألكتروني للتحقق من الحساب');
        return redirect()->route('teacher.loginform');

    }


    protected function broker()
    {
        return Password::broker('teachers');
    }



    public function loginform()
    {
   return view('auth.teacherLogin');
    }
   public function login(Request $request)
  {
   $data = $request->all();

   if (Auth::guard('teacher')->attempt(['email'=>$data['email'],'password'=>$data['password']])) {
       // Authentication passed, redirect to dashboard or any other route
       return redirect()->route('teacher.dashboard');
   }

   // Authentication failed, redirect back with error message
   return redirect()->route('teacher.login')->with('error', 'Invalid login credentials');
   }

   /**
    * Show the form for creating a new resource.
    */
   public function dashboard(Request $request)
   {
       return view("teacher.dashboard");

   }

   /**
    * Store a newly created resource in storage.
    */
   public function logout(Request $request)
   {
       Auth::guard('teacher')->logout();
       return redirect()->route('teacher.login')->with('success', 'You Have Logout Success');
   }


   public function showForgotPasswordForm()
   {
   return view('auth.passwords.teacher-email');
   }



   public function sendResetLinkEmail(Request $request)
   {
       $this->validate($request, ['email' => 'required|email']);

       $response = $this->broker()->sendResetLink(
           $request->only('email')
       );

       if ($response == Password::RESET_LINK_SENT) {
           Session::flash('success', 'Check your email for the password reset link.');
           return redirect()->route('teacher.loginform');
       } elseif ($response == Password::INVALID_USER) {
           Session::flash('error', 'The provided email address is not registered.');
       } else {
           Session::flash('error', 'Failed to send the password reset link. Please try again later.');
       }
       return redirect()->back()->withErrors(['email' => trans($response)]);
   }
   public function showResetForm(Request $request, $token = null)
   {
       return view('auth.passwords.teacher-reset')->with(
           ['token' => $token, 'email' => $request->email]
       );
   }

   public function teacherResetPassword(Request $request)
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
           return redirect()->route('teacher.loginform');
       } elseif ($response == Password::INVALID_TOKEN) {
           Session::flash('error', 'The password reset token is invalid. Please try again.');
       } elseif ($response == Password::INVALID_USER) {
           Session::flash('error', 'The provided email address is not registered.');
       } else {
           Session::flash('error', 'Failed to reset the password. Please try again later.');
       }

       return back()->withInput();
   }



}
