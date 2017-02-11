<?php

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    // Main dashboard
    Route::get('/', 'HomeController@index');
    // RESTful routes
    Route::resource('nursery', 'NurseryController');
    Route::resource('medics', 'MedicsController');
    Route::resource('slpce', 'SlpceController');
    Route::resource('nutriology', 'NutriologyController');
    Route::resource('laboratory', 'LabsController');
    Route::resource('reports', 'ReportsController');
});
// Testing controller
Route::get('test', 'testController@action');
