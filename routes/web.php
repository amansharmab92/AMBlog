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

Route::get('/', 'BlogController@index')->name('home');
Route::get('/home', 'BlogController@index');
Route::get('/aboutus', 'OpenController@aboutUs');
Route::get('/blog/create', 'BlogController@create');
Route::get('/blog/{blog}', 'BlogController@show');
Route::get('/blog/{blog}/edit', 'BlogController@showedit');
Route::get('/register', 'RegistrationController@create');
Route::get('/login', 'SessionsController@create')->name('login');
Route::get('/logout', 'SessionsController@destroy');


Route::post('/blog', 'BlogController@store');

Route::post('/blog/{blog}/comment', 'CommentsController@store');
Route::post('/register', 'RegistrationController@store');
Route::post('/login', 'SessionsController@store');

Route::patch('/blog/{blog}', 'BlogController@update');


