<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/authenticate', [HomeController::class, 'authenticate'])->name('authenticate');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');