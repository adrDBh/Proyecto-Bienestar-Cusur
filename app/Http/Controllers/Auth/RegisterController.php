<?php

namespace App\Http\Controllers\Auth;

use App\Libraries\General;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
        # TODO
        #$this->enum_values = General::getEnumValues('users', 'role');
        $this->middleware('guest');
    }

    protected $enum_values;


    protected $messages = [
        'required' => 'Este campo no puede estar vacío.',
        'email.required' => 'Este campo no puede estar vacío.',
        'UDG_Code.required' => 'Este campo no puede estar vacío.',
        'password.required' => 'Este campo no puede estar vacío.',
        'email.email' => 'El correo proporcionado es inválido.',
        'email.unique' => 'El correo proporcionado ya está registrado.',
        'UDG_Code.unique' => 'El código UDG proporcionado ya está registrado.',
        'UDG_Code.min' => 'El código UDG debe tener mínimo 7 caracteres.',
        'password.min' => 'La contraseña debe tener mínimo 6 caracteres.',
        'name.max' => 'El nombre no puede ser más largo que 255 caracteres.',
        'UDG_Code.max' => 'El código UDG no debe tener más de 9 caracteres.',
        'password.confirmed' => 'Las contraseñas no coinciden.'
    ];

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'UDG_Code' => 'required|min:7|max:9|unique:users',
            'role' => 'required',
            'password' => 'required|min:6|confirmed',
        ], $this->messages);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'UDG_Code' => $data['UDG_Code'],
            'role' => $data['#VALUE'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

