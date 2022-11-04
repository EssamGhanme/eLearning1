<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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
    return view('teacher/teacherDashboard');
});
Route::get('/home', function () {
    return view('guest/home');
});
Route::get('/teacher',[TeacherController::class,'index']);
Route::get('/course',[CourseController::class,'index']);


require __DIR__.'/auth.php';

require __DIR__.'/student_auth.php';

require __DIR__.'/teacher_auth.php';
