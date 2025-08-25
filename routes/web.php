<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome_simple');
});



Route::get('/home', [PostController::class, 'home']);
Route::get('/create', [PostController::class, 'create'])->name('create')->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('store')->middleware('auth');
Route::get('/message', [PostController::class, 'message'])->name('message');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
