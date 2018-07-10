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

Route::get('/', 'HomeController@index');
Route::get('/dashboard2', 'HomeController@dashboard2');
Route::get('/widgets','HomeController@widgets');
Route::get('/chartjs', 'HomeController@chartjs');
Route::get('/morris', 'HomeController@morris');
Route::get('/flot', 'HomeController@flot');
Route::get('/inline', 'HomeController@inline');
Route::get('/general', 'HomeController@general');
Route::get('/icons', 'HomeController@icons');
Route::get('/buttons', 'HomeController@buttons');
Route::get('/sliders', 'HomeController@slider');
Route::get('/timeline', 'HomeController@timeline');

// image
Route::get('/image', 'ImageController@index');