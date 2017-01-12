<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    protected $username = 'UDG_Code';

    public function username()
    {
        return $this->username;
    }

    public function login(Request $request)
    {
        // Validates if the given input is number-only or email
        $this->username =
            filter_var($request->input('User_data'),
                FILTER_VALIDATE_REGEXP,
                array("options" => array("regexp" => "/^(\d)+$/"))) ? 'UDG_Code' : 'email';

        $rules = [
            'User_data' => 'required',
            'password' => 'required',
        ];

        $this->validate($request, $rules);


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
