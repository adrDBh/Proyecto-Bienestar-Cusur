<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }


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
        'UDG_Code.max' => 'El código UDG no debe tener más de 9 caracteres.',
        'password.confirmed' => 'Las contraseñas no coinciden.'
    ];

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'UDG_Code' => 'required|min:7|max:9|unique:users',
            'password' => 'required|min:6|confirmed',
        ], $this->messages);
    }

    protected function create(array $data)
    {

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'UDG_Code' => $data['UDG_Code'],
            'password' => bcrypt($data['password']),
        ]);
        $user->attachRole(Role::where('name', '=', 'registered')->first());
        return $user;
    }
}

