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

Route::get('create', 'Post@create')->middleware('auth')->middleware('admin');

Route::get('get', 'Post@get');


Route::get('category', 'Categories@create')->middleware('auth')->middleware('admin');

Route::post('category', 'Categories@store');



Route::post('/', 'Post@store');

Route::post('post/{id}', 'Post@delete')->middleware('auth')->middleware('admin');

Route::get('post/{id}', 'Post@detail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('cat/{id}','Categories@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/comment/{id}','Post@comment')->middleware('auth');
