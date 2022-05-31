<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');})->name('home');

Route::get('/login', function () {
    return view('login');})->name('login');

Route::get('/registration', function () {
    return view('registration');})->name('registration');

Route::get('/startpage', function () {
    return view('startpage');})->name('startpage');

Route::get('/library', function () {
    return view('library');})->name('library');

Route::get('/sport', function () {
    return view('sport');})->name('sport');

Route::get('/todo', function () {
    return view('todo');})->name('todo');

Route::post('/login/submit', 'App\Http\Controllers\LogController@submit')->name('login-form');
