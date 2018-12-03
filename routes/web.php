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
// Route::get('/admin/{vue?}', function () {
//     return view('backend.home');
// })->where('vue', '[\/\w\.-]*');

Route::get('/{vue?}', function () {
    return view('frontend.home');
})->where('vue', '[\/\w\.-]*');

/*
Route::group(['prefix'=>'/'], function(){
    Route::get('/', function () {
        return view('frontend.home');
    });

    Route::get('/about', function(){
        echo 'about us';
    });

    Route::get('/contact', function(){
        echo 'contact us';
    });
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', function(){
        return view('backend.home');
    });

    Route::group(['prefix'=>'post'], function(){
        Route::get('/', function(){
            echo "post content";
        });
    });

    Route::group(['prefix'=>'image'], function(){
        Route::get('/', 'ImageController@index');
    });
});
*/