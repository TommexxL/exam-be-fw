<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courseadd', function () {
    return view('addCourse');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home', [CourseController::class, 'index'])->name('home');
Route::post('/courses', [CourseController::class, 'store']);

Route::patch('/courses/{id}/toggle', [CourseController::class, 'toggle'])->name('courses.toggle');
