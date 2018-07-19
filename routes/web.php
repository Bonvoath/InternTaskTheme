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
// Route to all page in dashboard
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
Route::get('/image', 'ImageController@index');

// Rout for Users Management
Route::get('userLists', 'UserController@index');
Route::group(['prefix'=>'user'], function(){
    Route::get('/getUser', 'UserController@getUser'); 
    Route::post('/create', 'UserController@store');
    Route::delete('/delete/{id}', 'UserController@destroy');
    Route::get('/edit/{id}', 'UserController@edit');
});
// Route for manage Role user
Route::group(['prefix'=>'role'], function(){
    Route::get('', 'RoleController@index');
    Route::post('/list', 'RoleController@list');
});