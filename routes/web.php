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

Route::get('/', 'PageController@index');
Route::get('/jobs', 'PageController@jobs');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/admin', 'PageController@admin');
Route::get('/gallery', 'PageController@gallery');