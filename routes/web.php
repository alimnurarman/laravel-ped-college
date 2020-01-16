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

Route::get('/', 'PagesController@default');
Route::resource('welcome', 'PagesController');
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
Route::get('/call_schedule','PagesController@call_schedule');
Route::get('/sample','PagesController@sample');
Route::get('/international_cooperation','PagesController@international_cooperation');
Route::get('/teachers','PagesController@teachers');
Route::get('/our_achievements','PagesController@our_achievements');
Route::get('/edu_work','PagesController@edu_work');
Route::get('/public_procurement','PagesController@public_procurement');
Route::get('/regulatory_legal_acts','PagesController@regulatory_legal_acts');
Route::get('/state_services','PagesController@state_services');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
