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
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ClientResultController;
use App\Http\Controllers\CertificateController;
use setasign\Fpdi\Fpdi;
use App\Models\Exam;
use App\Models\Lesson;

Route::resource('exams', ExamCRUDController::class);
Route::resource('lessons', LessonController::class);
Route::resource('documents', DocumentController::class);
Route::resource('comments', CommentController::class);
Route::resource('replies', CommentReplyController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('results', ClientResultController::class);
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

Route::middleware(['auth'])->group(function () {

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/result', [HomeController::class, 'result'])->name('result');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/videoplayer', [LessonController::class, 'fetch'])->name('videoplayer');
Route::get('/videoplayer/{lesson}', [LessonController::class, 'fetch'])->name('videoplayer');
Route::get('/videoplayer/{lesson}', [LessonController::class, 'select'])->name('videoselect');
Route::post('/videoplayer/{lesson}', [LessonController::class, 'status'])->name('changestatus');
Route::get('/result/download_doc', [DocumentController::class, 'getDownload'])->name('download');
Route::get('/result/certificate', [CertificateController::class, 'fillPDF'])->name('certificate');

Route::get('/comment', [CommentController::class, 'index'])->name('comment');
Route::post('/commentstore', [CommentController::class, 'store'])->name('comment.store');
Route::post('/commentreply/{comment}', [CommentReplyController::class, 'store'])->name('reply.store');
// Route::post('/videoplayer/', [LessonController::class, 'status'])->name('videoplayer');
// Route::get('/fetch_video', [App\Http\Controllers\LessonController::class, 'fetch'])->name('videoplayer');

Route::get('/test',[TestController::class, 'index'])->name('client.test');
Route::post('/test',[TestController::class, 'store'])->name('client.test.store');
Route::get('/results/{result_id}', [ClientResultController::class, 'show'])->name('client.results.show');
});

Route::get('/aboutus', function (){
    return view('aboutus');
});

// Admin zone
// Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/exams/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('is_admin');

// Route::post('test',[TestController::class, 'store'])->name('client.test.store')->middleware('is_admin');
// categories
// Route::resource('admin/categories', \App\Http\Controllers\CategoryController::class);
// Route::delete('admin/categories_mass_destroy', [\App\Http\Controllers\CategoryController::class, 'massDestroy'])->name('admin.categories.mass_destroy')->middleware('is_admin');
// Route::get('admin/categories/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('admin.categories.create')->middleware('is_admin');
// Route::get('admin/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index')->middleware('is_admin');
// Route::post('admin/categories/create/{id}', [\App\Http\Controllers\CategoryController::class, 'store'])->name('admin.categories.store')->middleware('is_admin');
// Route::get('admin/categories/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.categories.edit')->middleware('is_admin');
// // Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('admin.categories.destroy');
// Route::post('categories/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('admin.categories.update')->middleware('is_admin');

// questions
Route::resource('admin/exams/questions', \App\Http\Controllers\QuestionController::class);
Route::delete('admin/exams/questions_mass_destroy', [\App\Http\Controllers\QuestionController::class, 'massDestroy'])->name('admin.questions.mass_destroy')->middleware('is_admin');
Route::get('admin/exams/questions/create', [\App\Http\Controllers\QuestionController::class, 'create'])->name('admin.questions.create')->middleware('is_admin');
Route::get('admin/exams/questions', [\App\Http\Controllers\QuestionController::class, 'index'])->name('admin.questions.index')->middleware('is_admin');
Route::post('admin/exams/questions/create/{id}', [\App\Http\Controllers\QuestionController::class, 'store'])->name('admin.questions.store')->middleware('is_admin');
Route::get('admin/exams/questions/edit/{id}', [\App\Http\Controllers\QuestionController::class, 'edit'])->name('admin.questions.edit')->middleware('is_admin');
// Route::get('questions', [\App\Http\Controllers\QuestionController::class, 'destroy'])->name('admin.questions.destroy');
Route::post('admin/exams/questions/edit/{id}', [\App\Http\Controllers\QuestionController::class, 'update'])->name('admin.questions.update')->middleware('is_admin');

// options
Route::resource('admin/exams/options', \App\Http\Controllers\OptionController::class);
Route::delete('admin/exams/options_mass_destroy', [\App\Http\Controllers\OptionController::class, 'massDestroy'])->name('admin.options.mass_destroy')->middleware('is_admin');
Route::get('admin/exams/options/create', [\App\Http\Controllers\OptionController::class, 'create'])->name('admin.options.create')->middleware('is_admin');
Route::get('admin/exams/options', [\App\Http\Controllers\OptionController::class, 'index'])->name('admin.options.index')->middleware('is_admin');
Route::post('admin/exams/options/create', [\App\Http\Controllers\OptionController::class, 'store'])->name('admin.options.store')->middleware('is_admin');
Route::get('admin/exams/options/edit/{id}', [\App\Http\Controllers\OptionController::class, 'edit'])->name('admin.options.edit')->middleware('is_admin');
// Route::get('admin/options', [\App\Http\Controllers\OptionController::class, 'destroy'])->name('admin.options.destroy')->middleware('is_admin');
Route::post('admin/exams/options/edit/{id}', [\App\Http\Controllers\OptionController::class, 'update'])->name('options.update')->middleware('is_admin');

// results
Route::resource('admin/exams/results', \App\Http\Controllers\ResultController::class);
Route::delete('admin/exams/results_mass_destroy', [\App\Http\Controllers\ResultController::class, 'massDestroy'])->name('admin.results.mass_destroy')->middleware('is_admin');
Route::get('admin/exams/results/create', [\App\Http\Controllers\ResultController::class, 'create'])->name('admin.results.create')->middleware('is_admin');
Route::get('admin/exams/results', [\App\Http\Controllers\ResultController::class, 'index'])->name('admin.results.index')->middleware('is_admin');
Route::post('admin/exams/results/create', [\App\Http\Controllers\ResultController::class, 'store'])->name('admin.results.store')->middleware('is_admin');
Route::get('admin/exams/results/show/{id}', [\App\Http\Controllers\ResultController::class, 'show'])->name('admin.results.show')->middleware('is_admin');
Route::get('admin/exams/results/edit/{id}', [\App\Http\Controllers\ResultController::class, 'edit'])->name('admin.results.edit')->middleware('is_admin');
Route::post('admin/exams/results/edit', [\App\Http\Controllers\ResultController::class, 'update'])->name('admin.results.update')->middleware('is_admin');
// Route::get('admin/results/show/{id}', [\App\Http\Controllers\ResultController::class, 'destroy'])->name('admin.results.destroy')->middleware('is_admin');



Route::get('admin/lessons/editlesson', [LessonController::class, 'editlesson'])->name('admin.lessons.editlesson')->middleware('is_admin');
Route::get('admin/lessons/viewlesson', [LessonController::class, 'show'])->name('admin.lessons.viewlesson')->middleware('is_admin');
Route::get('admin/studentlist', [UserController::class, 'list'])->name('admin.studentList')->middleware('is_admin');
Route::get('admin/documents/editdocument', [DocumentController::class, 'editdocument'])->name('admin.documents.editDocument')->middleware('is_admin');
Route::get('admin/commentmanage', [CommentController::class, 'manage'])->name('admin.commentmanage')->middleware('is_admin');
Route::get('admin/replymanage', [CommentReplyController::class, 'manage'])->name('admin.replymanage')->middleware('is_admin');
Route::get('admin/comment', [CommentController::class, 'adminindex'])->name('admin.comment')->middleware('is_admin');
Route::post('admin/commentstore', [CommentController::class, 'adminstore'])->name('admin.comment.store')->middleware('is_admin');
Route::get('admin/studentlist/editusername/{id}', [UserController::class, 'edit'])->name('admin.editusername')->middleware('is_admin');
Route::post('admin/studentlist/editusername/{id}', [UserController::class, 'update'])->name('admin.editusername.update')->middleware('is_admin');

// Route::get('file-upload', [LessonController::class, 'index'])->name('files.index')->middleware('is_admin');
// Route::post('file-upload/upload-large-files', [LessonController::class, 'uploadLargeFiles'])->name('files.upload.large')->middleware('is_admin');

