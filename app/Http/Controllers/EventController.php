<?php

namespace App\Http\Controllers;
use App\Http\Traits\media;
use App\Models\Event;
use App\Models\Book;
use App\Models\EventDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    use media;
    public function all()
    {
        $events= Event::all();
        return view('teacher.event.index')->with('events',$events);
    }


    public function create()
    {
        $books=Book::all();
        return view("teacher.event.create")->with('books',$books);
    }


    public function store(Request $request)
    {
// dd($request);
        $event=new Event();
        $event->title=$request->title;
        $event->book_id=$request->book_id;
        $event->part_id=$request->part_id;
        $event->chapter_id=$request->chapter_id;
        $event->lesson_id=$request->lesson_id;
        $event->total_time=$request->total_time;
        $event->lectures=$request->lectures;
        $event->start=$request->start;
        $event->end=$request->end;
        $event->description=$request->description;
        $event->what_you_learn=$request->what_you_learn;
        $event->requirments=$request->requirments;
        $event->who_package_for=$request->who_package_for;
        $event->enroll_message=$request->enroll_message;
        $event->whatsapp=$request->whatsapp;
        $event->google_meet=$request->google_meet;
        $event->zoom=$request->zoom;
        $event->certification=$request->certification;
        $event->certification_title=$request->certification_title;
        $event->price=$request->price;
        $event->discount=$request->discount;
        // $event->price_after_discount=$request->price_after_discount;
        $event->price_after_discount = $event->price - ($event->price * $event->discount / 100);

        if ($request->hasFile('img')) {
        $img = $request->file('img');
        $img_name = $this->uploadfiles($img,'events/imgs/');
        $event->img = $img_name;
        }

        $event->save();


        // $event->eventDays()->delete();

    // Create new event days from the request data
    $eventDays = json_decode($request->input('eventDays'), true);
    foreach ($eventDays as $day) {
        $eventDay = new EventDay([
            'day' => $day['day'],
            'from' => $day['from'],
            'to' => $day['to']
        ]);

        $event->eventDays()->save($eventDay);
    }

    }


    public function edit($id)
    {
        $events = Event::findOrFail($id);
        $books = Book::all();
        return view('teacher.event.edit', compact('events','books'));
    }
    public function update(Request $request, $id)
    {

        $event = Event::findOrFail($id);
        $event->title=$request->title;
        $event->book_id=$request->book_id;
        $event->part_id=$request->part_id;
        $event->chapter_id=$request->chapter_id;
        $event->lesson_id=$request->lesson_id;
        $event->total_time=$request->total_time;
        $event->lectures=$request->lectures;
        $event->start=$request->start;
        $event->end=$request->end;
        $event->description=$request->description;
        $event->what_you_learn=$request->what_you_learn;
        $event->requirments=$request->requirments;
        $event->who_package_for=$request->who_package_for;
        $event->enroll_message=$request->enroll_message;
        $event->whatsapp=$request->whatsapp;
        $event->google_meet=$request->google_meet;
        $event->zoom=$request->zoom;
        $event->certification=$request->certification;
        $event->certification_title=$request->certification_title;
        $event->price=$request->price;
        $event->discount=$request->discount;

        $event->price_after_discount = $event->price - ($event->price * $event->discount / 100);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $img_name = $this->uploadfiles($img, 'events/imgs/');
            $event->img = $img_name;
        }
        $event->save();
        $eventDays = json_decode($request->input('eventDays'), true);


foreach ($eventDays as $day) {
    $eventDay = new EventDay([
        'day' => $day['day'],
        'from' => $day['from'],
        'to' => $day['to']
    ]);

    $event->eventDays()->save($eventDay);
}

        return response()->json(['message' => 'Event updated successfully']);
    }


    public function delete($id)
{
    $event = Event::findOrFail($id);
    $event->eventDays()->delete();
    $event->delete();
    Session::flash('success', 'تم حذف الدورة بنجاح');
    return redirect()->route('event.show');
}
}

