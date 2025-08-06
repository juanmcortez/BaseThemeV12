<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\DashboardController;

Route::get('/', DashboardController::class)->name('dashboard');
