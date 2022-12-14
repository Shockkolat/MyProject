<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExamCRUDController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentReplyController;
use App\Models\Exam;
use App\Models\Lesson;

Route::resource('exams', ExamCRUDController::class);
Route::resource('lessons', LessonController::class);
Route::resource('documents', DocumentController::class);
Route::resource('comments', CommentController::class);
Route::resource('replies', CommentReplyController::class);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/result', [HomeController::class, 'result'])->name('result');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/videoplayer', [LessonController::class, 'fetch'])->name('videoplayer');
Route::get('/videoplayer/{lesson}', [LessonController::class, 'fetch'])->name('videoplayer');
Route::get('/videoplayer/{lesson}', [LessonController::class, 'select'])->name('videoselect');
Route::post('/videoplayer/{lesson}', [LessonController::class, 'status'])->name('changestatus');

Route::get('/comment', [CommentController::class, 'index'])->name('comment');
Route::post('/commentstore', [CommentController::class, 'store'])->name('comment.store');
Route::post('/commentreply/{comment}', [CommentReplyController::class, 'store'])->name('reply.store');
// Route::post('/videoplayer/', [LessonController::class, 'status'])->name('videoplayer');
// Route::get('/fetch_video', [App\Http\Controllers\LessonController::class, 'fetch'])->name('videoplayer');

Route::get('/aboutus', function (){
    return view('aboutus');
});

// Admin zone
// Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/exams/index', [ExamCRUDController::class, 'index'])->name('admin.exams.index')->middleware('is_admin');
Route::get('admin/lessons/editlesson', [LessonController::class, 'editlesson'])->name('admin.lessons.editlesson')->middleware('is_admin');
Route::get('admin/lessons/viewlesson', [LessonController::class, 'show'])->name('admin.lessons.viewlesson')->middleware('is_admin');
Route::get('admin/studentlist', [UserController::class, 'list'])->name('admin.studentList')->middleware('is_admin');
Route::get('admin/documents/editdocument', [DocumentController::class, 'editdocument'])->name('admin.documents.editDocument')->middleware('is_admin');
Route::get('admin/commentmanage', [CommentController::class, 'manage'])->name('admin.commentmanage')->middleware('is_admin');
Route::get('admin/replymanage', [CommentReplyController::class, 'manage'])->name('admin.replymanage')->middleware('is_admin');
Route::get('admin/comment', [CommentController::class, 'adminindex'])->name('admin.comment')->middleware('is_admin');
Route::post('admin/commentstore', [CommentController::class, 'adminstore'])->name('admin.comment.store')->middleware('is_admin');

// Route::get('file-upload', [LessonController::class, 'index'])->name('files.index')->middleware('is_admin');
// Route::post('file-upload/upload-large-files', [LessonController::class, 'uploadLargeFiles'])->name('files.upload.large')->middleware('is_admin');