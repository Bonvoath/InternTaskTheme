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

Route::group(['prefix' => 'image'], function(){
    Route::get('', 'ImageController@index');
    Route::post('/list', 'ImageController@list');
    Route::post('/makeDir', 'ImageController@makeDir');
    Route::post('/upload', 'ImageController@upload');
});

// Rout for Users Management
Route::get('/userLists', 'UserController@index');

Route::get('/user', 'UserController@index'); 
Route::get('/getUser', 'UserController@getUser'); 

Route::post('/post', 'UserController@store');
Route::get('createUser', 'UserController@showCreate');
Route::delete('/user/{id}', 'UserController@destroy');

Route::group(['prefix'=>'role'], function(){
    Route::get('', 'RoleController@index');
    Route::post('/list', 'RoleController@list');
    Route::post('/save', 'RoleController@store');
});