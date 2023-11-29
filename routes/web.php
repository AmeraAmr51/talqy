<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\TeacherLoginController;
use App\Http\Controllers\InSiteCourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LibraryAdminController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


////////////////////////////        adminLogin     ///////////////////////////////


Route::prefix('admin')->group(function(){

    Route::get('/login', [AdminController::class, 'loginform'])->name('admin.loginform');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/password/forgot',[AdminController::class, 'showForgotPasswordForm'])->name('admin.password.forgot');
    Route::post('/password/email', [AdminController::class,'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('/password/reset/{token}', [AdminController::class,'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [AdminController::class,'adminResetPassword'])->name('admin.password.reset');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('admin');
});

////////////////////////////     teacherLogin        //////////////////////////////////////


Route::prefix('teacher')->group(function(){

    Route::get('/form', [TeacherLoginController::class, 'loginform'])->name('teacher.loginform');
    Route::post('/login', [TeacherLoginController::class, 'login'])->name('teacher.login');
    Route::get('/register', [TeacherLoginController::class, 'registerform'])->name('teacher.registerform');
    Route::post('/register', [TeacherLoginController::class, 'register'])->name('teacher.register');
    Route::get('/password/forgot',[TeacherLoginController::class, 'showForgotPasswordForm'])->name('teacher.password.forgot');
    Route::post('/password/email', [TeacherLoginController::class,'sendResetLinkEmail'])->name('teacher.password.email');
    Route::get('/password/reset/{token}', [TeacherLoginController::class,'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [TeacherLoginController::class,'teacherResetPassword'])->name('teacher.password.reset');
    Route::get('/dashboard', [TeacherLoginController::class, 'dashboard'])->name('teacher.dashboard')->middleware('teacher');
    Route::get('/logout', [TeacherLoginController::class, 'logout'])->name('teacher.logout')->middleware('teacher');
});

//////////////////////////      addTeachers        /////////////////////////////////////////////


Route::prefix('teachers')->middleware('admin')->group(function(){

    Route::get('/allTeachers', [TeacherController::class, 'all'])->name('teachers.show');
    Route::get('/addTeacher', [TeacherController::class, 'add'])->name('add.teacher');
    Route::post('/store', [TeacherController::class, 'store'])->name('store.teacher');
    Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit.teacher');
    Route::post('/update/{id}', [TeacherController::class, 'update'])->name('update.teacher');
    Route::get('/delete/{id}', [TeacherController::class, 'delete'])->name('delete.teacher');
});

////////////////////////        library     //////////////////////////////////////////////////


// Route::prefix('library')->middleware('teacher')->group(function(){

//     Route::get('/', [LibraryController::class, 'index'])->name('library.index');
//     Route::get('/create', [LibraryController::class, 'create'])->name('library.create');
//     Route::post('/store', [LibraryController::class, 'store'])->name('library.store');
//     Route::get('/edit/{id}', [LibraryController::class, 'edit'])->name('library.edit');
//     Route::post('/update/{id}', [LibraryController::class, 'update'])->name('library.update');
//     Route::get('/delete/{id}', [LibraryController::class, 'delete'])->name('library.delete');
//     Route::post('/loader/{id}', [LibraryController::class,'loader'])->name('library.loader');
//     Route::post('/store/single/{topic_type}', [LibraryController::class,'singleStore'])->name('library.single.store');
//     Route::post('/update/single/{topic_type}', [LibraryController::class,'singleUpdate'])->name('library.single.update');
//     Route::post('/destroy/single/{topic_type}', [LibraryController::class,'singleDelete'])->name('library.single.delete');
//     Route::post('/show/{id}',[LibraryController::class,'show'])->name('library.show');
//     Route::post('/library', [LibraryController::class,'library'])->name('library.library');
// });
Route::prefix('library')->middleware('admin')->group(function(){

    Route::get('/', [LibraryAdminController::class, 'index'])->name('library.index');
    Route::get('/create', [LibraryAdminController::class, 'create'])->name('library.create');
    Route::post('/store', [LibraryAdminController::class, 'store'])->name('library.store');
    Route::get('/edit/{id}', [LibraryAdminController::class, 'edit'])->name('library.edit');
    Route::post('/update/{id}', [LibraryAdminController::class, 'update'])->name('library.update');
    Route::get('/delete/{id}', [LibraryAdminController::class, 'delete'])->name('library.delete');
    Route::post('/loader/{id}', [LibraryAdminController::class,'loader'])->name('library.loader');
    Route::post('/store/single/{topic_type}', [LibraryAdminController::class,'singleStore'])->name('library.single.store');
    Route::post('/update/single/{topic_type}', [LibraryAdminController::class,'singleUpdate'])->name('library.single.update');
    Route::post('/destroy/single/{topic_type}', [LibraryAdminController::class,'singleDelete'])->name('library.single.delete');
    Route::post('/show/{id}',[LibraryAdminController::class,'show'])->name('library.show');
    Route::post('/library', [LibraryAdminController::class,'library'])->name('library.library');
});

///////////////////////        files        //////////////////////////////////////////////////


Route::prefix('file')->middleware('teacher')->group(function(){

    Route::get('/create', [MaterialController::class, 'create'])->name('file.add');
    Route::post('/store', [MaterialController::class, 'store'])->name('file.store');
    Route::get('/edit/{id}', [MaterialController::class, 'edit'])->name('file.edit');
    Route::post('/update/{id}', [MaterialController::class, 'update'])->name('file.update');
    Route::get('/delete/{id}', [MaterialController::class, 'delete'])->name('file.delete');
    Route::get('/allFiles', [MaterialController::class, 'all'])->name('file.show');

});

///////////////////////        events        //////////////////////////////////////////////////


Route::prefix('event')->middleware('teacher')->group(function(){

    Route::get('/create', [EventController::class, 'create'])->name('event.add');
    Route::post('/store', [EventController::class, 'store'])->name('event.store');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::get('/delete/{id}', [EventController::class, 'delete'])->name('event.delete');
    Route::get('/allEvents', [EventController::class, 'all'])->name('event.show');

});


///////////////////////        InSiteCourses        //////////////////////////////////////////////////


Route::prefix('Course')->middleware('teacher')->group(function(){

    Route::get('/create', [InSiteCourseController::class, 'create'])->name('course.add');
    Route::post('/store', [InSiteCourseController::class, 'store'])->name('course.store');
    Route::get('/edit/{id}', [InSiteCourseController::class, 'edit'])->name('course.edit');
    Route::post('/update/{id}', [InSiteCourseController::class, 'update'])->name('course.update');
    Route::get('/delete/{id}', [InSiteCourseController::class, 'delete'])->name('course.delete');
    Route::get('/allCourses', [InSiteCourseController::class, 'all'])->name('course.show');

});

///////////////////////        InSiteCourses        //////////////////////////////////////////////////


Route::prefix('Exam')->middleware('teacher')->group(function(){

    Route::get('/create', [ExamController::class, 'create'])->name('exam.add');
    Route::post('/store', [ExamController::class, 'store'])->name('exam.store');
    Route::get('/edit/{id}', [ExamController::class, 'edit'])->name('exam.edit');
    Route::post('/update/{id}', [ExamController::class, 'update'])->name('exam.update');
    Route::get('/delete/{id}', [ExamController::class, 'delete'])->name('exam.delete');
    Route::get('/allExams', [ExamController::class, 'all'])->name('exam.show');

});

////////////////////////        videos    //////////////////////////////////////////////////


Route::prefix('videos')->middleware('teacher')->group(function(){

    Route::get('/', [VideosController::class, 'index'])->name('videos.index');
    Route::get('/create', [VideosController::class, 'create'])->name('videos.create');

    Route::get('/addnewVideosBaB', function()  {return view('teacher.videos.addnewVideosBaB');})->name('videos.addnewVideosBaB');
    Route::get('/addNewVideoClass', function()  {return view('teacher.videos.addNewVideoClass');})->name('videos.addNewVideoClass');
    Route::get('/addNewVideoSubjectName', function()  {return view('teacher.videos.addNewVideoSubjectName');})->name('videos.addNewVideoSubjectName');
    Route::get('/uploadVideo', function()  {return view('teacher.videos.uploadVideo');})->name('videos.uploadVideo');
    Route::get('/videoReview', function()  {return view('teacher.videos.videoReview');})->name('videos.videoReview');

    Route::post('/store', [VideosController::class, 'store'])->name('videos.store');
    Route::get('/edit/{id}', [VideosController::class, 'edit'])->name('videos.edit');
    Route::post('/update/{id}', [VideosController::class, 'update'])->name('videos.update');
    Route::get('/delete/{id}', [VideosController::class, 'delete'])->name('videos.delete');
    Route::post('/loader/{id}', [VideosController::class,'loader'])->name('videos.loader');
    Route::post('/store/single/{topic_type}', [VideosController::class,'singleStore'])->name('videos.single.store');
    Route::post('/update/single/{topic_type}', [VideosController::class,'singleUpdate'])->name('videos.single.update');
    Route::post('/destroy/single/{topic_type}', [VideosController::class,'singleDelete'])->name('videos.single.delete');
    Route::post('/show/{id}',[VideosController::class,'show'])->name('videos.show');
    Route::post('/videos', [VideosController::class,'videos'])->name('videos.videos');
});