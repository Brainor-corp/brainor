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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', "MainPageController@index")->name('/');
    Route::get('/ins', "MainPageController@inside")->name('/i');
    Route::get('/search', "MainPageController@search")->name('/search');
});
