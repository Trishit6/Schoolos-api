<?php

use App\Http\Controllers\Api\AcademicClassController;
use App\Http\Controllers\Api\AcademicSessionController;
use App\Http\Controllers\Api\AcademicStandardController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\StudentSessionController;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::prefix('auth')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

// Protected Routes
Route::middleware('jwt.cookie')->group(function () {

    // Auth
    Route::prefix('auth')->group(function () {

        Route::get('/profile', [AuthController::class, 'profile']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });

    // Academic Sessions
    Route::apiResource(
        'academic_sessions',
        AcademicSessionController::class
    );

    Route::patch(
        'academic_sessions/{id}/activate',
        [AcademicSessionController::class, 'activate']
    );

    // Academic Standards
    Route::apiResource(
        'academic_standards',
        AcademicStandardController::class
    );

    // Academic_Classes
    Route::apiResource(
        'academic_classes',
        AcademicClassController::class
    );

    Route::apiResource(
        'students',
        StudentController::class
    );

    Route::apiResource(
        'student_sessions',
        StudentSessionController::class
    );

});
