<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $username = 'email';

    public function redirectPath()
    {
        return '/home';
    }

    public function username()
    {
        return $this->username;
    }

    public function login(Request $request)
    {
        // Validates if the given input is number-only or email
        $this->username =
            filter_var($request->input('Login'),
                FILTER_VALIDATE_REGEXP,
                array("options" => array("regexp" => "/^(\d)+$/"))) ? 'UDG_Code' : 'email';

        // Validates login...
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
