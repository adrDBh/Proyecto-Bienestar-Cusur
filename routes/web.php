<?php
Route::get('/','HomeController@index');
Auth::routes();
Route::get('nursery', 'NurseryController@show');
Route::get('medics', 'MedicsController@show');
Route::get('slpce', 'SlpceController@show');
Route::get('nutriology', 'NutriologyController@show');
Route::get('laboratory', 'LabsController@show');
Route::get('reports', 'ReportsController@show');
Route::get('test', 'testController@action');
