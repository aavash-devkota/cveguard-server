<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AllowNonLoggedInUsersOnly;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

// Auth
// ----

// Sign-in and Sign-up

Route::middleware(AllowNonLoggedInUsersOnly::class)->name('auth.')->group(function () {
    Route::get('/signin', [AuthController::class, 'login_view'])->name('signin');
    Route::post('/signin', [AuthController::class, 'login_submit']);
    Route::get('/signup', [AuthController::class, 'signup_view'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup_submit']);
});

// Email Verification

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [AuthController::class, 'verify_email_view'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verify_email_link'])->name('verification.verify')->middleware('signed');
    Route::post('/email/verification-notification', [AuthController::class, 'resend_verify_email'])->middleware('throttle:6,1')->name('verification.send');
});

// Logout

Route::middleware('auth')->name('auth.')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Dashboard
// ---------

Route::middleware(['auth', 'verified'])->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
