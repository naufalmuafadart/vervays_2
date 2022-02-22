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
    Route::get('/email_verification', "SignUpController@emailVerification")->name('email-verification');
    Route::get('/verificate_email', 'SignUpController@verficateEmail');
});

Route::middleware(['IsLogin', 'IsEmailVerified'])->group(function() {
    Route::get('/logout', 'LogoutController@index')->name('logout');
    
    Route::get('/home', "buyer\HomeController@index")->name('home');
    
    Route::prefix('/publisher')->middleware(['IsPublisher'])->group(function() {
        Route::get('/', 'publisher\DashboardController@index')->name('dashboard-publisher');
        Route::get('/edit', 'publisher\DashboardController@edit');
        Route::get('/cashout', 'publisher\CashoutController@index');
        Route::prefix('/book')->group(function() {
            Route::get('/create', 'publisher\BookController@create');
            Route::get('/edit/{id}', 'publisher\BookController@edit');
        });
    });
});

Route::prefix('api')->group(function() {
    // Route::get('/test', 'publisher\DashboardController@test');
    Route::middleware(['IsNotLogin'])->group(function() {
        Route::post('/login', 'LoginController@checkLogin');
        Route::post('/signup', 'SignUpController@signUp');
    });
    Route::middleware(['IsLogin'])->group(function() {
        Route::get('/first_name', "api\UserController@getFirstName");

        Route::prefix('/publisher')->group(function() {
            Route::get('/publisher_book_for_dashboard_publisher', 'api\BookController@getBookForDashboardPublisher');

            Route::post('/update', 'api\PublisherController@update');
            Route::prefix('/book') ->group(function() {
                Route::post('/store', 'api\BookController@store');
                Route::post('/update', 'api\BookController@update');
            });
        });
    });
});