<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EsewaPaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectScanController;
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

    Route::resource('projects', ProjectController::class);
    Route::resource('projects.scans', ProjectScanController::class)->only('show');

    Route::get('/notifications', [DashboardController::class, 'notifications'])->name('notifications');
    Route::get('/notifications/{notification}', [DashboardController::class, 'notification_view'])->name('notifications.view');

    Route::get('/past-scans', [DashboardController::class, 'past_scans'])->name('past-scans');

    Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('edit-profile');
    Route::post('/edit-profile', [ProfileController::class, 'update'])->name('edit-profile-update');
});

// Esewa Payment
// -------------

Route::middleware(['auth', 'verified'])->prefix('/esewa')->name('esewa.')->group(function () {
    Route::get('/initialize', [EsewaPaymentController::class, 'initialize'])->name('initialize');
    Route::get('/verify', [EsewaPaymentController::class, 'verify'])->name('verify');
});
