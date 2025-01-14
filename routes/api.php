<?php

use App\Http\Controllers\ProjectClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScanController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Project Client
// --------------

Route::apiResource('project-client', ProjectClientController::class)->only(['store', 'destroy']);

// Project Scan
// ------------

Route::post('project-scans', [ScanController::class, 'store'])->name('project_scans.store');
