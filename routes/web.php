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
    Route::get('/', "MainPageController@index")->name('main-page');
    Route::get('/ins', "MainPageController@inside")->name('/i');
    Route::get('/search', "SearchController@search")->name('search');
    Route::post('/get-state', "CalculatorController@getState");
    Route::post('/SendMail', ['uses' => 'SendMailController@SendMail'])->name("SendMail");

    Route::group(['middleware' => ['auth']], function () {
        Route::post('/ReportGenerate', ['uses' => 'ReportGeneratorController@generateReport'])->name("generateReport");
        Route::post('/TrelloReportPreview', ['uses' => 'TrelloGenerator@generateTrelloReportPreview'])->name("generateTrelloReportPreview");
        Route::post('/TrelloReportDownload', ['uses' => 'TrelloGenerator@generateTrelloReportDownload'])->name("generateTrelloReportDownload");
        Route::post('/SitemapGenerate', ['uses' => 'GeneratorController@generateSitemap'])->name("generateSitemap");
    });
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
