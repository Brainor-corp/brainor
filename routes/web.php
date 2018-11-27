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
    Route::get('/search', "SearchController@search")->name('search');
    Route::post('/ReportGenerate', ['uses' => 'ReportGeneratorController@generateReport'])->name("generateReport");
    Route::post('/SitemapGenerate', ['uses' => 'GeneratorController@generateSitemap'])->name("generateSitemap");
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
