<?php

use App\User;

// Root directory route
Route::get('/', 'HomeController@Index');

// Temporary route to insert an user and display it.
Route::get('users', function(){
	// Create a new User
	// First way
	/*try {
		$user = new User();
        $user->name = 'admin';
        $user->password = bcrypt('admin');
        $user->email = 'admin@bienestarcusur.com';
        print_r($user);
        $user->save();
        echo 'saved\n';
        return 'success';
       }
       catch(Exception $e){
           return 'Could not create user';
       }*/
       // Second way
       try{
       	/*
		User::create([
       	'name' => 'admin',
       	'email' => 'admin@bienestarcusur.com',
       	'password' => bcrypt('admin')
       	]);
       	*/
       return User::all();
       } catch (Exception $e){
       	return 'Could not create user.';
       }
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::post('/login','Auth\LoginController@handleLogin');
