<?php

namespace App\Http\Controllers;
use App\Http\Traits\media;
use App\Models\Book;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ExamController extends Controller
{
    use media;
    public function __construct()
    {
        $this->middleware('teacher');
    }


    public function all()
    {
        $exams= Exam::all();
        return view('teacher.exam.index')->with('exams',$exams);
    }
    public function create()
    {
        $books=Book::all();

        return view("teacher.exam.create")->with('books',$books);
    }


    public function store(Request $request)
    {

        $exam=new Exam();
        $exam->title=$request->title;
        $exam->duration=$request->duration;
        $exam->book_id=$request->book_id;
        $exam->part_id=$request->part_id;
        $exam->chapter_id=$request->chapter_id;
        $exam->lesson_id=$request->lesson_id;


        $exam->save();

    }


    public function edit($id)
{
    $exam = Exam::findOrFail($id);
    $books = Book::all();
    return view('teacher.exam.edit', compact('exam','books'));
}

public function update(Request $request, $id)
{
    // dd($request);
    $exam = Exam::findOrFail($id);
    $exam->title = $request->title;
    $exam->duration=$request->duration;
    $exam->book_id = $request->book_id;
    $exam->part_id = $request->part_id;
    $exam->chapter_id = $request->chapter_id;
    $exam->lesson_id = $request->lesson_id;



    $exam->save();
    Session::flash('success', 'تم تعديل الاختبار بنجاح');
    return redirect()->route('exam.show');

}

public function delete($id)
{
    $exam = Exam::findOrFail($id);
    $exam->delete();
    Session::flash('success', 'تم حذف الاختبار بنجاح');
    return redirect()->route('exam.show');
}
}
