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

Route::get('/','WelcomeController@welcome' );

Route::get('/about','WelcomeController@about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'/contact_us','ContactsController@contact');
