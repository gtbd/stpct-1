<?php

namespace App\Http\Controllers\Cashier\CashierAuth;

use App\Account;
use App\Http\Controllers\Controller;
use App\Notifications\AccountVerification;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use Notifiable;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request) {

       $account = Account::create([
        'email'=>$request['email'],
        'password' => 'password',
        'account_type'=>$request['account_type']
    ]);

       $admin = $account->admin()->create([
        'firstname' => $request['firstname'],
        'middlename' => $request['middlename'],
        'lastname' => $request['lastname'],
        'extension_name' => $request['extension_name'],
        'date_of_birth' => $request['date_of_birth'],
        'address' => $request['address'],
        'contact_number' => $request['contact_number'],
    ]);


       $generated = generatedPassword($admin->id);
       $hashed = Hash::make($generated);
       $admin->account()->update(['password' => $hashed]);
       $account->notify(new AccountVerification($admin, $generated));
       return redirect('/admin/login')->with('verification', 'Kindly check your email to verify.');

   }

   public function showRegistrationForm() {
    return view('admin.register');
   }
}
