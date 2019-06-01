<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    /*public function enroll()
    {
    	if (is_student()) {
    		if (is_shs()) {
    			Class::create([
    			]);
    		}
    		elseif (is_college()) {
    			Class::create([
    			]);
    		}
    	}
    }*/


    public function create() {
    	if (is_student()) {
    		if (is_shs()) {
    			dd('shs');
    		}
    		elseif (is_college()) {
    			dd('college');
    		}
    	}
    }

    public function index() {
    	$accounts = Account::with('admin')->get();
    	return view('test', compact('accounts'));
    }
}
