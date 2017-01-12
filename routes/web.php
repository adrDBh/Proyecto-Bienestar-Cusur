<?php

// Routes
Route::get('/', 'HomeController@Index');
Route::get('/home', 'HomeController@index');
Route::post('/login','Auth\LoginController@login');
Auth::routes();
Route::get('/home', 'HomeController@index');
