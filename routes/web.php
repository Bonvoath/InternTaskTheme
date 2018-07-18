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
Auth::routes();

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
// Route for Images magement
Route::get('/image/makeDir', 'ImageController@makeDir');
// Route Image upload
Route::get('/image/upload', 'ImageController@upload');
// Rout for Users Management
Route::get('/userLists', 'UserController@index');

Route::get('/', 'UserController@index'); 
Route::get('/getUser', 'UserController@getUser'); 

Route::post('/post', 'UserController@store');
Route::get('createUser', 'UserController@showCreate');
Route::delete('/user/{id}', 'UserController@destroy');
// image
Route::get('/image', 'ImageController@index');