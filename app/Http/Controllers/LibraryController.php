<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Part;
use Auth;
use DB;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function __construct()
    {
        $this->middleware('teacher');
    }


    public function index()
    {
        $books=Book::all();
        return view('teacher.library.index')->with('books', $books);;
    }
    public function successJsonResponse(){
        return response()->json(null, 200);
    }

    public function create()
    {
        return view("teacher.library.add");
    }



     public function store(Request $request)
    {
    // dd($request->all());
    $teacher_id = $request->teacher_id;


    $book = Book::create([
        'title' => $request->title,
        'teacher_id' => $teacher_id,
    ]);

    // Check if parts are provided in the request
    if (isset($request->parts) && is_array($request->parts)) {
        foreach ($request->parts as $partData) {
            // Create a new Part
            $part = Part::create([
                'title' => $partData['title'],
                'book_id' => $book->id,
                'teacher_id' => $teacher_id,
            ]);

            // Check if chapters are provided in the part
            if (isset($partData['chapters']) && is_array($partData['chapters'])) {
                foreach ($partData['chapters'] as $chapterData) {
                    // Create a new Chapter
                    $chapter = Chapter::create([
                        'title' => $chapterData['title'],
                        'part_id' => $part->id,
                        'teacher_id' => $teacher_id,
                    ]);

                    // Check if lessons are provided in the chapter
                    if (isset($chapterData['lessons']) && is_array($chapterData['lessons'])) {
                        foreach ($chapterData['lessons'] as $lessonData) {
                            // Create a new Lesson
                            Lesson::create([
                                'title' => $lessonData['title'],
                                'chapter_id' => $chapter->id,
                                'teacher_id' => $teacher_id,
                            ]);
                        }
                    }
                }
            }
        }
    }
    return redirect()->route('library.index');
    // return $this->successJsonResponse();
    }
    public function singleStore(Request $request, $topic_type){

        switch ($topic_type){
            case 'part':
                $part = part::create([
                    'title'             => $request->title,
                    'book_id'           => $request->parent_id,
                    'teacher_id'        => Auth::id(),
                ]);
                break;
            case 'chapter':
                $chapter = Chapter::create([
                    'title'             => $request->title,
                    'part_id'           => $request->parent_id,
                    'teacher_id'        => Auth::id(),
                ]);
                break;
            case 'lesson':
                $lesson = Lesson::create([
                    'title'             => $request->title,
                    'chapter_id'           => $request->parent_id,
                    'teacher_id'        => Auth::id(),
                    ]);

                break;
            default:
                break;
        }
        return response()->json([], 200);
    }


    public function getBook($book_id)
    {
        $book = Book::find($book_id);
        $parts = [];

        // Get parts associated with the book
        $part = Part::select('id', 'title')
            ->where('book_id', $book_id)
            ->get();

        if ($part->count() > 0) {
            foreach ($part as $partItem) {
                $partItemData = [
                    'id' => $partItem->id,
                    'title' => $partItem->title,
                    'chapters' => [], // Initialize an empty array for chapters
                ];

                // Get chapters associated with the part
                $chapter = Chapter::select('id', 'title')
                    ->where('part_id', $partItem->id)
                    ->get();

                if ($chapter->count() > 0) {
                    foreach ($chapter as $chapterItem) {
                        $chapterItemData = [
                            'id' => $chapterItem->id,
                            'title' => $chapterItem->title,
                            'lessons' => [], // Initialize an empty array for lessons
                        ];

                        // Get lessons associated with the chapter
                        $lesson = Lesson::select('id', 'title')
                            ->where('chapter_id', $chapterItem->id)
                            ->get();

                        if ($lesson->count() > 0) {
                            foreach ($lesson as $lessonItem) {
                                $lessonItemData = [
                                    'id' => $lessonItem->id,
                                    'title' => $lessonItem->title,
                                ];

                                $chapterItemData['lessons'][] = $lessonItemData;
                            }
                        }

                        $partItemData['chapters'][] = $chapterItemData;
                    }
                }

                $parts[] = $partItemData;
            }
        }

        return [
            'id' => $book->id,
            'title' => $book->title,
            'parts' => $parts,
        ];
    }

    public function show($id)
    {
        return $this->getBook($id);
    }
    public function loader($book_id){
        $bookData = $this->getBook($book_id);
        $this->parts = $bookData['parts'];
        return  $bookData;
    }

    public function modelByTopicType($topic_type, $topic_id){
        switch ($topic_type){
            case 'book':
                $topic = Book::find($topic_id);
                break;
            case 'part':
                $topic = Part::find($topic_id);
                break;
            case 'chapter':
                $topic = Chapter::find($topic_id);
                break;
            case 'lesson':
                $topic = Lesson::find($topic_id);
                break;
            default:
                $topic = null;
                break;
        }
        return $topic;
    }
    public function delete($id)
    {
        $book = Book::where([
            'id'                => $id,
        ])->first();

        if($book){
            $book->delete();
        }
        return back()->with('success', 'تم الحذف بنجاح');
    }

    public function singleDelete(Request $request, $topic_type) {
        $topic = $this->modelByTopicType($topic_type, $request->topic_id);

        if ($topic) {
          $topic->delete();
          return response()->json(['message' => 'Deletion successful.'], 200);
        }

        return response()->json(['message' => 'Topic not found.'], 404);
      }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book= Book::find($id);

        return view('teacher.library.edit')->with('book_id', $id)->with('book',$book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $book = Book::find($id);
        if($book){
            $book->title = $request->book_title;
            $book->save();
        }
        // return redirect()->route('library.index');
        return response($book, 200);
    }

    public function singleUpdate(Request $request, $topic_type){

        if($request->value == '' ){
            return response()->json('empty ?', 422);
        }

        $topic = $this->modelByTopicType($topic_type, $request->topic_id);

        if($topic){
            if($topic_type == 'book'){
                $topic->title = $request->value;
            }else if($topic_type == 'part'){
                $topic->title = $request->value;
            }
            else if($topic_type == 'chapter'){
                $topic->title = $request->value;
           }
            else if($topic_type == 'lesson'){
                $topic->title = $request->value;
           }

            $topic->save();
        }

        return response()->json([], 200);
    }


    public function library(Request $request){
        switch($request->topic_required){

            case 'book':
            case 'all-books':
                $books = Book::get(['id', 'title']);
                return response()->json($books, 200);
            case 'part':
                $parts = DB::table('parts')
                ->where([
                     'book_id'       => $request->parent_topic_id,
                    ])
                ->select('id', DB::raw('(title) AS title'))
                ->get();
                return response()->json($parts, 200);
            case 'chapter':
                $chapters = DB::table('chapters')
                ->where([
                    'part_id'       => $request->parent_topic_id,
                    ])
                ->select('id', DB::raw('(title) AS title'))
                ->get();
                return response()->json($chapters, 200);
            case 'lesson':
                $lessons = DB::table('lessons')
                ->where([
                    'chapter_id'       => $request->parent_topic_id,
                    ])
                    ->select('id', DB::raw('(title) AS title'))
                    ->get();
                return response()->json($lessons, 200);
            default:
                return response()->json([], 200);
        }
    }
}
