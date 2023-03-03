<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'index']);

Route::resource('dashboard', DashboardController::class);
Route::resource('category', CategoryController::class)->except('show');
