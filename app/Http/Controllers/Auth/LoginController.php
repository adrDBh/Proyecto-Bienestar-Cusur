<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function field_verification_rules()
    {
        return ['login' => 'required', 'password' => 'required'];
    }

    public function login(Request $request)
    {
        $this->validate($request, $this->field_verification_rules());

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'UDG_Code';

        $request->merge([$login_type => $request->input('login')]);

        if (Auth::attempt($request->only($login_type, 'password'))) {
            return redirect()->intended($this->redirectTo);
        }

        return redirect()->back()->withInput()->withErrors(['login' => 'Datos de inicio de sesión incorrectos.']);
    }

}
