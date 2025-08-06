<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\DashboardController;

Route::middleware('auth')->group(function () {
    // The routes are forced under fortify control
    Route::get('/', DashboardController::class)->name('dashboard');
});

