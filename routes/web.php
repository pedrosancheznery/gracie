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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('home');
})->middleware('auth');

Route::get('/women', function () {
    return view('women');
})->middleware('auth');

Route::get('/bullyproof', function () {
    return view('bullyproof');
})->middleware('auth');

Route::get('/master', function () {
    return view('master');
})->middleware('auth');

Route::post('/generate-png', 'PngController@addData')->name('gen');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'LoginController@authenticate')->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
