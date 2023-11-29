<?php

namespace App\Http\Controllers;
use App\Http\Traits\media;
use App\Models\InSiteCourse;
use App\Models\InSiteCourseDay;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
class InSiteCourseController extends Controller
{
    use media;
    public function all()
    {
        $courses= InSiteCourse::all();
        return view('teacher.course.index')->with('courses',$courses);
    }

    use media;
    public function create()
    {
        $books=Book::all();
        return view("teacher.course.create")->with('books',$books);
    }


    public function store(Request $request)
    {
// dd($request);
        $course=new InSiteCourse();
        $course->title=$request->title;
        $course->book_id=$request->book_id;
        $course->part_id=$request->part_id;
        $course->chapter_id=$request->chapter_id;
        $course->lesson_id=$request->lesson_id;
        $course->total_time=$request->total_time;
        $course->lectures=$request->lectures;
        $course->start=$request->start;
        $course->end=$request->end;
        $course->description=$request->description;
        $course->what_you_learn=$request->what_you_learn;
        $course->requirments=$request->requirments;
        $course->who_package_for=$request->who_package_for;
        $course->enroll_message=$request->enroll_message;
        $course->whatsapp=$request->whatsapp;
        $course->address=$request->address;
        $course->certification=$request->certification;
        $course->certification_title=$request->certification_title;
        $course->price=$request->price;
        $course->discount=$request->discount;
        // $course->price_after_discount=$request->price_after_discount;
        $course->price_after_discount = $course->price - ($course->price * $course->discount / 100);

        if ($request->hasFile('img')) {
        $img = $request->file('img');
        $img_name = $this->uploadfiles($img,'courses/imgs/');
        $course->img = $img_name;
        }

        $course->save();


        // $course->courseDays()->delete();

    // Create new course days from the request data
    $courseDays = json_decode($request->input('courseDays'), true);
    foreach ($courseDays as $day) {
        $courseDay = new InSiteCourseDay([
            'day' => $day['day'],
            'from' => $day['from'],
            'to' => $day['to']
        ]);

        $course->InSiteCourseDays()->save($courseDay);
    }

    }


    public function edit($id)
    {
        $courses = InSiteCourse::findOrFail($id);
        $books = Book::all();
        return view('teacher.course.edit', compact('courses','books'));
    }
    public function update(Request $request, $id)
    {

        $course = InSiteCourse::findOrFail($id);
        $course->title=$request->title;
        $course->book_id=$request->book_id;
        $course->part_id=$request->part_id;
        $course->chapter_id=$request->chapter_id;
        $course->lesson_id=$request->lesson_id;
        $course->total_time=$request->total_time;
        $course->lectures=$request->lectures;
        $course->start=$request->start;
        $course->end=$request->end;
        $course->description=$request->description;
        $course->what_you_learn=$request->what_you_learn;
        $course->requirments=$request->requirments;
        $course->who_package_for=$request->who_package_for;
        $course->enroll_message=$request->enroll_message;
        $course->whatsapp=$request->whatsapp;
        $course->address=$request->address;
        $course->certification=$request->certification;
        $course->certification_title=$request->certification_title;
        $course->price=$request->price;
        $course->discount=$request->discount;

        $course->price_after_discount = $course->price - ($course->price * $course->discount / 100);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $img_name = $this->uploadfiles($img, 'courses/imgs/');
            $course->img = $img_name;
        }
        $course->save();
        $courseDays = json_decode($request->input('courseDays'), true);


foreach ($courseDays as $day) {
    $courseDay = new InSiteCourseDay([
        'day' => $day['day'],
        'from' => $day['from'],
        'to' => $day['to']
    ]);

    $course->InSiteCourseDays()->save($courseDay);
}

        return response()->json(['message' => 'course updated successfully']);
    }


    public function delete($id)
{
    $course = InSiteCourse::findOrFail($id);
    $course->InSiteCourseDays()->delete();
    $course->delete();
    Session::flash('success', 'تم حذف الدورة بنجاح');
    return redirect()->route('course.show');
}
}
