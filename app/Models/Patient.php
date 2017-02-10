<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'first_name',
        'first_lastname',
        'second_lastname',
        'Control_code',
        'civil_state',
        'gender',
        'birth_date',
        'dependents',
        'child_number',
        'birth_place',
    ];

    public function VitalSigns()
    {
        return $this->hasMany(VitalSigns::class);
    }
}
