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
Route::get('/category/gos','PagesController@gos');
Route::get('/category/page','PagesController@page');
Route::get('/category/page2','PagesController@page2');
Route::get('/specialities','PagesController@specialities');
Route::get('/gallery','PagesController@gallery');
Route::get('/college_history','PagesController@college_history');
Route::get('/administration','PagesController@administration');
Route::get('/director_h','PagesController@director_h');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
