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

