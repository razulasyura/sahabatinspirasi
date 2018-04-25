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

Route::get('/', 'FrontController@index');
Route::get('/index', 'FrontController@index');
Route::get( '/home', ['as' => 'home', 'uses' => 'FrontController@index']);
Route::get( '/about', ['as' => 'about', 'uses' => 'FrontController@about']);
Route::get( '/team', ['as' => 'team', 'uses' => 'FrontController@team']);
Route::get( '/volunteer', ['as' => 'volunteer', 'uses' => 'FrontController@volunteer']);
Route::get( '/event', ['as' => 'event', 'uses' => 'FrontController@event']);
Route::get( '/event_detail', ['as' => 'blog.detail', 'uses' => 'FrontController@event_detail']);
Route::get( '/gallery', ['as' => 'gallery', 'uses' => 'FrontController@gallery']);
Route::get( '/video', ['as' => 'video', 'uses' => 'FrontController@video']);
Route::get( '/contact', ['as' => 'contact', 'uses' => 'FrontController@contact']);



