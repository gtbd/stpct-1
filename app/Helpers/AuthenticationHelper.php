<?php

function is_admin() {
	if (auth()->user()->account_type == 'Admin') {
		return true;
	}
}
function is_student() {
	if (auth()->user()->account_type == 'Student') {
		return true;
	}
}
function is_shs() {
	if (auth()->user()->student->isCollege == false) {
		return true;
	}
}
function is_college() {
	if (auth()->user()->student->isCollege == true) {
		return true;
	}
}

function accountSelector(){
	$email = auth()->user()->email;
	switch (auth()->user()->account_type) {
		case 'Admin':
		$user = auth()->user()->admin;
		return compact('user', 'email');
		break;
		
		case 'Head Teacher':
		$user = auth()->user()->headTeacher;
		return compact('user', 'email');
		break;
		
		case 'Faculty':
		$user = auth()->user()->faculty;
		return compact('user', 'email');
		break;
		
		case 'Registrar':
		$user = auth()->user()->registrar;
		return compact('user', 'email');
		break;
		
		case 'Cashier':
		$user = auth()->user()->cashier;
		return compact('user', 'email');
		break;
		
		case 'Student':
		$user = auth()->user()->student;
		return compact('user', 'email');
		break;
	}
}