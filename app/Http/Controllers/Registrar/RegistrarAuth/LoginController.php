<?php

namespace App\Http\Controllers\Registrar\RegistrarAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {
        return view('registrar.login');
    }

    public function login(Request $request) {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'account_type' => "Registrar"])) {
    // The user is active, not suspended, and exists.
            return redirect()->intended('/dashboard')->with('message', 'You\'ve successfully logged in as '. Auth::user()->registrar->firstname.' '.Auth::user()->registrar->lastname.'.');
        }
    }
}
