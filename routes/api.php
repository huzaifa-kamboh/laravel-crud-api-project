<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::apiResource('students', App\Http\Controllers\Api\StudentController::class);


Route::get('/test', function() {
    return response()->json(['message' => 'API Working!', 'timestamp' => now()]);
});

// Temporary comment out your student routes
// Route::apiResource('students', StudentController::class);