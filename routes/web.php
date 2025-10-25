<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);
Route::get('/', [StudentController::class, 'index']);

// Route::get('/', function(){
//     return view('students.index', compact('students'));
// });


// Route::get('/', function () {
//     return view('welcome');
// });
