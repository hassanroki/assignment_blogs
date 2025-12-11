<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class,'login']);
// Route::get('/register', [AuthController::class,'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class,'register']);
Route::post('/logout', [AuthController::class,'logout'])->name('logout');


Route::prefix('admin')->middleware('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('blogs', BlogController::class);
});
