<?php

namespace App\Http\Controllers;

use App\Http\Traits\media;
use App\Models\Book;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
class MaterialController extends Controller
{

    use media;
    public function __construct()
    {
        $this->middleware('teacher');
    }


    public function all()
    {
        $materials= Material::all();
        return view('teacher.material.index')->with('materials',$materials);
    }
    public function create()
    {
        $books=Book::all();
        // $book_select = [''];
        // foreach($books as $b) {
        //     $book_select[$b->id] = $b->title;
        // }
        return view("teacher.material.create")->with('books',$books);
    }


    public function store(Request $request)
    {

        $material=new Material();
        $material->title=$request->title;
        $material->book_id=$request->book_id;
        $material->part_id=$request->part_id;
        $material->chapter_id=$request->chapter_id;
        $material->lesson_id=$request->lesson_id;

        if ($request->hasFile('file')) {
        $file = $request->file('file');
        $file_name = $this->uploadfiles($file,'materials/files/');
        $material->file = $file_name;
        }

        if ($request->hasFile('cover')) {
        $cover = $request->file('cover');
        $cover_name = $this->uploadfiles($cover,'materials/imgs/');
        $material->cover = $cover_name;
        }
        $material->save();

    }


    public function edit($id)
{
    $material = Material::findOrFail($id);
    $books = Book::all();
    return view('teacher.material.edit', compact('material','books'));
}

public function update(Request $request, $id)
{
    // dd($request);
    $material = Material::findOrFail($id);
    $material->title = $request->title;
    $material->book_id = $request->book_id;
    $material->part_id = $request->part_id;
    $material->chapter_id = $request->chapter_id;
    $material->lesson_id = $request->lesson_id;

    if ($request->hasFile('file')) {

        if ($material->file) {
            $this->deleteFile('materials/files/' . $material->file);
        }

        $file = $request->file('file');
        $file_name = $this->uploadfiles($file, 'materials/files/');
        $material->file = $file_name;
    }

    if ($request->hasFile('cover')) {

        if ($material->cover) {
            $this->deleteFile('materials/imgs/' . $material->cover);
        }

        $cover = $request->file('cover');
        $cover_name = $this->uploadfiles($cover, 'materials/imgs/');
        $material->cover = $cover_name;
    }

    $material->save();
    Session::flash('success', 'تم تعديل الملف بنجاح');
    return redirect()->route('file.show');

}
private function deleteFile($filePath)
{
    if (File::exists($filePath)) {
        File::delete($filePath);
    }
}
public function delete($id)
{
    $material = Material::findOrFail($id);
    $material->delete();
    Session::flash('success', 'تم حذف الملف بنجاح');
    return redirect()->route('file.show');
}


}
