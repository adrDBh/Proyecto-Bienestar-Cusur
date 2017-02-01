<?php


Route::get('/', 'HomeController@Index');
Route::get('/test', 'testController@action');
Auth::routes();

