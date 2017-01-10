<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // Overrides. 
    protected $redirectTo = '/home';
    protected $username = 'UDG_Code';

    public function handleLogin(Request $request){
      // TODO: Handle login with either UDG control code or user email address...
      echo Input::get('UDG_Code');
    //  $field = filter_var(Input::get('UDG_Code'), FILTER_VALIDATE_EMAIL) ? 'email' : 'UDG_Code';
    //  $request->merge([$field => Input::get('email')]);
    //  $this->username = $field;
    //  return $this->login($request);
    }

    // Overriding original username class
    public function username(){
      return $this->username;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
