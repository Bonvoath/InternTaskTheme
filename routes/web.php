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

Route::group(['prefix' => 'image'], function(){
    Route::get('', 'ImageController@index');
    Route::post('/list', 'ImageController@list');
    Route::post('/makeDir', 'ImageController@makeDir');
    Route::post('/upload', 'ImageController@upload');
});

// Rout for Users Management
Route::group(['prefix'=>'user'], function(){
    Route::get('', 'UserController@index');
    Route::get('/edit/{id}', 'UserController@edit');
    Route::post('/list', 'UserController@list'); 
    Route::post('/create', 'UserController@store');
    Route::delete('/delete/{id}', 'UserController@destroy');
});
// Route for manage Role user
Route::group(['prefix'=>'role'], function(){
    Route::get('', 'RoleController@index');
    Route::post('/list', 'RoleController@list');
    Route::post('/save', 'RoleController@store');
});