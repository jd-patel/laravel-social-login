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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/facebook', [App\Http\Controllers\FbController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [App\Http\Controllers\FbController::class, 'facebookCallback']);

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'googleCallback']);

Route::get('auth/twitter', [App\Http\Controllers\TwitterController::class, 'redirectToTwitter']);
Route::get('auth/twitter/callback', [App\Http\Controllers\TwitterController::class, 'twitterCallback']);