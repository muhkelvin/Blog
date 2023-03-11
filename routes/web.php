<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\show;
use Illuminate\Support\Facades\Route;






Route::get('/' ,[HomeController::class, 'index']);
Route::get('categories', [CategoriesController::class , 'index']);
Route::get('categories/{id}', [CategoriesController::class , 'showpostcategory'])->name('showpostcategory');
Route::get('about', [HomeController::class , 'about']);
Route::get('contact', [HomeController::class,'contact']);
Route::get('/{post:slug}', [HomeController::class , 'show'])->name('show.post');

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class , 'store']);
Route::get('logout', [LoginController::class , 'logout'])->middleware('auth');

Route::get('register',[RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');


Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');






