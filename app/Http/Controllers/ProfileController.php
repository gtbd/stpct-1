<?php

namespace App\Http\Controllers;

use App\Account;
use App\Admin;
use App\Registrar;
use App\HeadTeacher;
use App\Faculty;
use App\Cashier;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\VerifiesEmails;

class ProfileController extends Controller
{
    use VerifiesEmails;
    protected $redirectTo = '/dashboard';

    public function __construct() {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $account = Account::create([
        //     'email' => $request['email'],
        //     'password' => 'password',
        //     'account_type' => $request['account_type'],
        // ]);
        // if(Auth::user()->account_type == 'Admin'){

        //     switch ($request['account_type']) {
        //         case 'Admin': create_admin(); break;

        //         case 'Faculty': create_faculty(); break;
                
        //         case 'Registrar': create_registrar(); break;

        //         case 'Cashier': create_cashier(); break;

        //         case 'Head Teacher': create_headTeacher(); break;
                
        //         default:
        //         return redirect('/account/create')->with('message', 'Something went wrong with the request!')
        //                             ->withInput($request->all());
        //         break;
        //     }
        // }
        // if (Auth::user()->account_type == 'Registrar') {
        //     switch ($request['account_type'] == 'Student') {
        //         case 'Student': create_student(); break;               
        //         default:
        //         return redirect('/account/create')->with('message', 'Unknown Account Type!');
        //         break;
        //     }

        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
        return $account;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAddUserForm() {

    }


    public function createUser(Request $request) {

    }
    public function dashboard() {
        $students = Student::with('account')->get();
        $faculties = Faculty::with('account')->get();
        $registrars = Registrar::with('account')->get();
        $admins = Admin::with('account')->get();
        $headTeachers = HeadTeacher::with('account')->get();
        $cashiers = Cashier::with('account')->get();
        
        return view('account.dashboard', 
            compact('students', 'faculties', 'registrars', 'admins', 'headTeachers', 'cashiers'));
        // return view('dashboard', 
        //     compact('users'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->intended('/');
    }

    public function viewAssessment() {
        $user = Auth::user();
        /*return view('assessment', compact('user'));*/
        $pdf = \PDF::loadView('assessment', compact('user'));
        return $pdf->stream('assessment.pdf');
    }
    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        $request->user()->sendEmailVerificationNotification();
    }
}