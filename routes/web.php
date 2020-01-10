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

Route::get('/', 'PagesController@index');
Route::get('/basic', 'PagesController@basic');
Route::get('/app', 'PagesController@app');
Route::get('/dd-admin', 'PagesController@login');
Route::get('/president/message', 'PagesController@message');
Route::get('/spiritual_revivals','PagesController@spiritual_revivals');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

