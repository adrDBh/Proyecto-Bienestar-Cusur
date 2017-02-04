<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'UDG_Code', 'role'];
    protected $hidden = ['password', 'remember_token'];
}
