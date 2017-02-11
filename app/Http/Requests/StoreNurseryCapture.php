<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNurseryCapture extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // Required form fields
        return [
            'FC' => 'numeric',
            'FR' => 'numeric',
            'Temp' => 'numeric|between:35,42'
        ];
    }

    public function messages()
    {
        // Custom errors messages
        return [
            'mmHG.numeric' => 'La presión tiene que ser sólo número entero, Ej: 70',
            'FC.numeric' => 'La frecuencia cardiaca debe ser sólo un número, Ej 80',
            'FR.numeric' => 'La frecuencia respiratoria debe ser sólo un número, Ej 16',
            'Temp.numeric' => 'La temperatura tiene debe ser sólo un número con decimales, Ej: 36.8',
            'Temp.between' => 'Rango de temperatura inválido, rangos aceptables 35° - 42°'
        ];
    }
}
