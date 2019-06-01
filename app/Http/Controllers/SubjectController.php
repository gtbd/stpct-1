<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index() {

	}

	public function create() {
		return view('admin.subject.create');
	}

	public function store(Request $request) {
		$subject = Subject::create([
			'subject_code' => request('subject_code'),
			'description' => request('description'),
			'year_level' => request('year_level'),
			'semester' => request('semester'),
			'total_units' => request('total_units'),
		]);

		if(request('prerequisites') !== null){
			$prerequisites = explode('|', request('prerequisites'));
			foreach ($prerequisites as $p){
				$subject->prerequisites()->create([
					'name' => $p,
				]);
			}
		}

		return back()->with('message' , 'You have successfully created the subject');
	}
}
