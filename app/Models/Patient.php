<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
      protected $fillable = [
      'first_name',
      'mid_name',
      'last_name',
      'code',
      'civil_state',
      'gender',
      'birth_date',
      'dependents',
      'child_number',
      'birth_place',
    ];
}
