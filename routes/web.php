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
Route::get('/jobs', 'HomeController@jobs');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/admin', 'PageController@admin');
Route::get('/gallery', 'PageController@gallery');
Route::get('/logout', 'HomeController@logout');
Auth::routes();

Route::middleware(['password_expired'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
});





Route::post('password/post_expired', 'Auth\ExpiredPasswordController@postExpired')
        ->name('password.post_expired');
Route::get('/password_expired', 'Auth\ExpiredPasswordController@expired')
        ->name('password.expired');
Route::get('/reset_password', 'Auth\ExpiredPasswordController@expired')
        ->name('password.expired');
