<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');})->name('home');

Route::get('/login', [\App\Http\Controllers\LogController::class, 'showLoginForm'])->name('login');

Route::get('/registration', [\App\Http\Controllers\LogController::class, 'showRegistrationForm'])->name('registration');
Route::get('/register_process', [\App\Http\Controllers\LogController::class, 'register'])->name('register_process');

Route::get('/startpage', function () {
    return view('startpage');})->name('startpage');

Route::get('/library', function () {
    return view('library');})->name('library');

// Route::get('/sport', function () {
//     return view('sport');})->name('sport');

Route::get('/todo', function () {
    return view('todo');})->name('todo');

