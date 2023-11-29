<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;
class TeacherController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function all()
    {
        $teachers= Teacher::all();
        return view('admin.teacher.show')->with('teachers',$teachers);
    }
    public function add()
    {
        return view('admin.teacher.add');
    }

    public function store(Request $request)
{


    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:teachers,email',
        'phone' => 'required|string',
        'nationality' => 'required|string',
        'experience' => 'required',
        'password' => 'required|min:6',
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

    Session::flash('success', 'تمت اضافة المعلم بنجاح');
    return redirect()->route('teachers.show');
    // Redirect or do something else after storing the teacher


}
public function edit($id)
{
    $teacher = Teacher::findOrFail($id);
    return view('admin.teacher.edit', compact('teacher'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'nationality' => 'required|string',
        'profit_percentage' => 'required',
        'experience' => 'required',
        'password' => 'required|min:6',
        'note' => 'nullable|string'
    ], [
        'name.required' => 'الاسم مطلوب',
        'name.string' => 'الرجاء إدخال قيمة نصية للإسم',
        'email.required' => 'البريد الإلكتروني مطلوب',
        'email.email' => 'البريد الإلكتروني يجب أن يكون عنوان بريد إلكتروني صالح',

        'phone.required' => '  الجوال مطلوب',
        'nationality.required' => ' الجنسية مطلوبة',
        'experience.required' => ' سنوات الخبرة مطلوبة',

    ]);

    $teacher = Teacher::findOrFail($id);
    $teacher->name = $request->name;
    $teacher->email = $request->email;
    $teacher->phone = $request->phone;
    $teacher->nationality = $request->nationality;
    $teacher->profit_percentage = $request->profit_percentage;
    $teacher->experience = $request->experience;

    if ($request->filled('password')) {
        // Hash the password if it's provided in the request
        $teacher->password = Hash::make($request->password);
    }

    $teacher->note = $request->note;
    $teacher->save();

    Session::flash('success', 'تم تعديل المعلم بنجاح');
    return redirect()->route('teachers.show');
}

public function delete($id)
{
    $teacher = Teacher::findOrFail($id);
    $teacher->delete();
    Session::flash('success', 'تم حذف المعلم بنجاح');
    // Redirect or do something else after deleting the teacher
    return redirect()->route('teachers.show');
}



}
