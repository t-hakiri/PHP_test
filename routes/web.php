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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'UserController');

Route::resource('book', 'BookController');
Route::get('book', 'BookController@index');
Route::get('book/{id}', 'BookController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
