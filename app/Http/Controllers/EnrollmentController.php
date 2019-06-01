<?php

namespace App\Http\Controllers;

use App\Account;
use App\Enrollment;
use App\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Displays the enrollment page for students
     *
     * @return \Illuminate\Http\Response
     */
    
    public function showEnrollment(Account $user)
    {

    	
    	$subjects = Subject::all();
    	$enrollment  = Enrollment::latest()->get()->first();

    	if (todayIsEnrollment() && $enrollment->status){
    		return view('enrollment', compact('subjects', 'enrollment'));
    	}
    	else{
    		abort(403, 'It is not enrollment yet!');
    	}


    }
	/**
	 * Displays form for declaration of enrollment
	 *
     */
	public function declareEnrollment()
	{
		if (\Gate::allows('createEnrollment', 'App\Enrollment')) {
			$enrollment = Enrollment::latest()->get()->first();
	    	$start = Carbon::parse($enrollment->start_date)->isoFormat('MMM DD \'YY');
	    	$end = Carbon::parse($enrollment->end_date)->isoFormat('MMM DD \'YY');
			return view('admin.declare', compact('enrollment', 'start','end'));
		}
	}

	/**
	 * Stores date from the form for declaration of enrollment
	 *
     */
	public function store(Request $request)
	{
		Enrollment::create([
			'start_date' => request('start_date'),
			'end_date' => request('end_date'),
			'semester' => request('semester'),
		]);
		return back()->with('message','You have successfully declared enrollment for '.request('semester').' semester on '.request('start_date').' to '.request('end_date').'.');
	}
	public function toggle(Request $request)
	{
		if(request()->has('toggle')){
			$enrollment = Enrollment::latest()->get()->first();
			$enrollment->update([
				'status' => $request['toggle'],
			]);
		}
		return back();	
	}
}
