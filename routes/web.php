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
});

Route::get('/women', function () {
    return view('women');
});

Route::get('/bullyproof', function () {
    return view('bullyproof');
});

Route::get('/master', function () {
    return view('master');
});

Route::post('/generate-docx', 'DocxController@generateDocx')->name('genx');
Route::post('/generate-png', 'PngController@addData')->name('gen');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'LoginController@authenticate')->name('login');
// Route::post('/logout', 'LoginController@authenticate')->name('logout');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
