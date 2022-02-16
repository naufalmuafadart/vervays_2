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
    return redirect()->route('home');
});

Route::middleware(['IsNotLogin'])->group(function() {
    Route::get('/signup', "SignUpController@index")->name('signup');
    Route::get('/login', "LoginController@index")->name('login');
});

Route::middleware(['IsLogin'])->group(function() {
    Route::get('/logout', 'LogoutController@index')->name('logout');
    
    Route::get('/home', "buyer\HomeController@index")->name('home');
});

Route::prefix('api')->group(function() {
    Route::middleware(['IsNotLogin'])->group(function() {
        Route::post('/login', 'LoginController@checkLogin');
        Route::post('/signup', 'SignUpController@signUp');
    });
});