<?php

namespace App\Http\Controllers\Cashier\CashierAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*public function login(Request $request) {
        $credentials = $request->only('email','password');
        dd(Auth::attempt($credentials));
    }*/


    public function showLoginForm() {
        return view('cashier.login');
    }



    /*public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
        }
    }*/

    public function login(ValidationRequest $request) {
        
        if (Auth::attempt(['email'=>request('email'), 'password'=>request('password'), 'account_type'=>"Cashier"], request('remember'))) {
                // The user is active, not suspended, and exists.
                return redirect()->intended('/dashboard')->with('message', 'You\'ve successfully logged in as '. Auth::user()->cashier->firstname.' '.Auth::user()->cashier->lastname.'.');
        }else{
            return back()
            ->withErrors(['credentials'=> trans('auth.failed')])
            ->withInput($request->except('password'));
        }
    }
}
