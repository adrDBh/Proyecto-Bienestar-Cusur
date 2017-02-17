<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnthropometricEvaluation extends Model
{
    protected $fillable = [
        'size',
        'current_weight',
        'IMC',
        'weight_category',
        'obesity_grade',
        'hip_circumference',
        'waist_danger',
        'waist_circumference',
        'ideal_weight',
        'habitual_weight',
        'desnutrition_grade',
        'hand_circumference',
        'icc',
        'mass_distribution',
        'complexity',
        'cmb',
        'pcm',
        'pct',
        'pcse',
        'pcsi',
        'grease_mass',
        'grease%',
        'GM',
        'total_water',
        'is_active',
        'exercise_intensity',
        'does_exercise',
        'exercise_type',
        'exercise_frequency',
        'exercise_duration',
        'patient_id'
    ];

    protected function Patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
