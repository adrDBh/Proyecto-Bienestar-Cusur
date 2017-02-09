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
            'p_nombre' => 'required',
            'ln_1' => 'required',
            'ln_2' => 'required',
            'pressure' => 'required',
            'c_frecuency' => 'required|numeric',
            'b_frecuency' => 'required|numeric',
            'temp' => 'required|numeric|between:35,42'
        ];
    }

    public function messages()
    {
        // Custom errors messages
        return [
            'p_nombre.required' => 'Nombre vacío',
            'ln_1.required' => 'Apellido paterno vacío',
            'ln_2.required' => 'Apellido materno vacío',
            'pressure.required' => 'Presión arterial vacía',
            'pressure.numeric' => 'La presión tiene que ser sólo número entero, Ej: 70',
            'c_frecuency.numeric' => 'La frecuencia cardiaca debe ser sólo un número, Ej 80',
            'b_frecuency.numeric' => 'La frecuencia respiratoria debe ser sólo un número, Ej 16',
            'temp.numeric' => 'La temperatura tiene debe ser sólo un número con decimales, Ej: 36.8',
            'temp.between' => 'Rango de temperatura inválido, rangos aceptables 35° - 42°'
        ];
    }
}
