<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VitalSigns extends Model
{
    protected $fillable = [
        'mmHG',
        'FC',
        'FR',
        'Temp',
        'patient_id'
    ];

    protected function Patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
