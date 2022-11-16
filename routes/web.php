<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/en ce moment', function () {
    return view('news');
})->name('news');

Route::get('/construire un projet', function () {
    return view('collaborater');
})->name('collaborater');

Route::get('/nos projet', function () {
    return view('project');
})->name('project');

Route::get('/A propos', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');