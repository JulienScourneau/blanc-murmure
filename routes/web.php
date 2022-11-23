<?php

use App\Http\Controllers\AttendeesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StageController;
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

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('/en-ce-moment', [StageController::class, 'index'])->name('news');

Route::get('/construire-un-projet', function () {
    return view('collaborater');
})->name('collaborater');

Route::get('/nos-projets', [ProjectController::class, 'index'])->name('project');
Route::get('/nos-projets/sculpture',[])->name('sculpture');
Route::get('/nos-projets/illustration',)->name('illustration');
Route::get('/nos-projets/espace-urbain',)->name('espace-urbain');
Route::get('/nos-projets/video',)->name('video');
Route::get('/nos-projets/catalogue',)->name('catalogue');

Route::get('/à-propos', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/inscription', [AttendeesController::class, 'index'])->name('inscription');
Route::post('/inscription', [AttendeesController::class, 'store'])->name('inscription');
