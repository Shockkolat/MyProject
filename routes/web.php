<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExamCRUDController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Models\Exam;

Route::resource('exams', ExamCRUDController::class);
Route::resource('lessons', LessonController::class);
Route::resource('documents', DocumentController::class);

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', function (){
    return view('aboutus');
});

// Admin zone
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/exams/index', [ExamCRUDController::class, 'index'])->name('admin.exams.index')->middleware('is_admin');
Route::get('admin/lessons/editlesson', [LessonController::class, 'editlesson'])->name('admin.lessons.editlesson')->middleware('is_admin');
Route::get('admin/lessons/viewlesson', [LessonController::class, 'show'])->name('admin.lessons.viewlesson')->middleware('is_admin');
Route::get('admin/studentlist', [UserController::class, 'list'])->name('admin.studentList')->middleware('is_admin');
Route::get('admin/documents/editdocument', [DocumentController::class, 'editdocument'])->name('admin.documents.editDocument')->middleware('is_admin');