<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
<<<<<<< HEAD
    protected $fillable = ['name', 'email', 'UDG_code', 'password'];
    protected $hidden = ['password', 'remember_token'];


=======

    protected $fillable = ['name', 'email','UDG_code', 'password',];
    
    protected $hidden = ['password', 'remember_token',];
>>>>>>> parent of 9ec77a6... DB now has seeds, changes to front-end and still ongoing multiple-way user auth..
}
