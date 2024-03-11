<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.home');
});

Route::get('/portfolio', function () {
    return view('main.portfolio');
})->name('portfolio');

Route::get('/do', function () {
    return view('main.do');
})->name('do');

Route::get('/about', function () {
    return view('main.about');
})->name('about');

Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');

Route::get('/home', function () {
    return view('main.home');
})->name('home');
