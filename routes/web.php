<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\DashboardController;

Route::middleware('auth')->group(function () {
    // The routes are forced under fortify control
    Route::get('/', DashboardController::class)->name('dashboard');
});

