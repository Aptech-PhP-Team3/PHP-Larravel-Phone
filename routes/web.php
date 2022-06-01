<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\HomeController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/category', function () {
    return view('category');
})->name('category');