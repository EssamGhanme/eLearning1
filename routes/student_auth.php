<?php

use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;


Route::prefix('guest/')->group(  function () {
    Route::get('register',[StudentController::class,'index'])
    ->name('register');
    Route::post('register',[StudentController::class,'store']);

});
