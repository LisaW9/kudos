<?php

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
Route::get('/', 'HomeController@index')->name('login');

Route::get('users/facebook', 'UserController@redirectToFacebook');
Route::get('users/handlefacebookcallback', 'UserController@handleFacebookCallback');

Route::middleware('auth')->group(function () {
    Route::get('users', 'UserController@index');
    Route::get('users/{user}', 'UserController@show');

    Route::get('compliments/given', 'ComplimentController@given');
    Route::get('compliments/received', 'Complimentcontroller@received');
    Route::post('compliments', 'ComplimentController@store');
});