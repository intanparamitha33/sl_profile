<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HobbiesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('profile');
});

Route::get('/hobbies/music', [HobbiesController::class, 'musicData']);
Route::get('/hobbies/music/details/{name}', [HobbiesController::class, 'musicDetails']);

Route::get('/hobbies/watching', [HobbiesController::class, 'watchingData']);
Route::get('/hobbies/watching/details/{name}', [HobbiesController::class, 'watchingDetails']);

Route::get('/hobbies/reading', [HobbiesController::class, 'readingData']);
Route::get('/hobbies/reading/details/{name}', [HobbiesController::class, 'readingDetails']);
