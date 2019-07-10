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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ajax request only
Route::get('/location/provinces', 'RegisterController@provinces');
Route::get('/location/regency', 'RegisterController@regency');
Route::get('/location/district', 'RegisterController@district');
Route::get('/location/village', 'RegisterController@village');

Route::get('/location', 'LocationController@provinces');
Route::get('/json-regencies', 'LocationController@regencies');





