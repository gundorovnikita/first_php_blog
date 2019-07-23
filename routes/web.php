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

Route::get('/', 'Post@index');

Route::get('create', 'Post@create');

Route::get('get', 'Post@get');


Route::get('category', 'Categories@create');

Route::post('category', 'Categories@store');


Route::get('cat/{id}','Categories@detail');


Route::post('/', 'Post@store');

Route::post('{id}', 'Post@delete');

Route::get('{id}', 'Post@detail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
