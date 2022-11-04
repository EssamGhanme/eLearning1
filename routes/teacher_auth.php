<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TeacherController::class,"index"])
->name('teacher.dashboard')->middleware('isTeacher');

Route::prefix('teacher')->middleware('guest:teacher')->group(function(){



    Route::get('login', [TeacherController::class,"loginPg"])
    ->name('teacher.login');

    Route::post('login', [TeacherController::class,"login"])
    ->name('teacher.login');

    Route::get('register', [TeacherController::class,"register"])
    ->name('teacher.register');

    Route::post('register', [TeacherController::class,"store"])
    ->name('teacher.register');

});

    Route::post('logout',[TeacherController::class,'logout'])
    ->name('teacher.logout');


// -------------------------
Route::prefix('teacher')->middleware('isTeacher:teacher')->group(function(){
    Route::get('addCourse',[CourseController::class,'create'])
    ->name("teacher.addCourse");
    Route::get('showCourses',[CourseController::class,'show'])
    ->name("teacher.addCourse");
});


Route::post('addCourse',[CourseController::class,'store'])->name('addCourse');
Route::get('showCourses',[CourseController::class,'show'])->name('showCourses');
