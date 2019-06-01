<?php

use App\Http\Controllers\AccountController;


function generatedPassword($data){
	return Hash::make($data);
}
function create_admin(){
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
	$account->sendEmailVerificationNotification();

}
function create_faculty(){
	$faculty = $account->faculty()->create([
		'firstname' => $request['firstname'],
		'middlename' => $request['middlename'],
		'lastname' => $request['lastname'],
		'extension_name' => $request['extension_name'],
		'date_of_birth' => $request['date_of_birth'],
		'address' => $request['address'],
		'department' => $request['department'],
		'contact_number' => $request['contact_number'],
		'faculty_type' => $request['faculty_type'],
	]);
	$generated = generatedPassword($faculty->id);
	$hashed = Hash::make($generated);
	$faculty->account()->update(['password' => $hashed]);
	$account->sendEmailVerificationNotification();
	return redirect('/account/create')->with('message', 'Faculty Member created successfully!');
}
function create_registrar(){
	$registrar = $account->registrar()->create([
		'firstname' => $request['firstname'],
		'middlename' => $request['middlename'],
		'lastname' => $request['lastname'],
		'extension_name' => $request['extension_name'],
		'department' => $request['department'],
		'date_of_birth' => $request['date_of_birth'],
		'address' => $request['address'],
		'contact_number' => $request['contact_number'],
	]);
	$generated = generatedPassword($registrar->id);
	$hashed = Hash::make($generated);
	$registrar->account()->update(['password' => $hashed]);
	$account->sendEmailVerificationNotification();
	return redirect('/account/create')->with('message', 'Registrar created successfully!');
}
function create_cashier(){
	$cashier = $account->cashier()->create([
		'firstname' => $request['firstname'],
		'middlename' => $request['middlename'],
		'lastname' => $request['lastname'],
		'extension_name' => $request['extension_name'],
		'date_of_birth' => $request['date_of_birth'],
		'address' => $request['address'],
		'contact_number' => $request['contact_number'],
	]);
	$cashier->account()->update(['password' => $hashed]);
	return redirect('/account/create')->with('message', 'Cashier created successfully!');
}
function create_headTeacher(){
	$head_teacher = $account->headTeacher()->create([
		'firstname' => $request['firstname'],
		'middlename' => $request['middlename'],
		'lastname' => $request['lastname'],
		'extension_name' => $request['extension_name'],
		'date_of_birth' => $request['date_of_birth'],
		'address' => $request['address'],
		'contact_number' => $request['contact_number'],
	]);
	$head_teacher->account()->update(['password' => $hashed]);
	return redirect('/account/create')->with('message', 'Head Teacher created successfully!');
}
function create_student(){
	$student = $account->student()->create([
		'firstname' => $request['firstname'],
		'middlename' => $request['middlename'],
		'lastname' => $request['lastname'],
		'course' => $request['course'],
		'extension_name' => $request['extension_name'],
		'date_of_birth' => $request['date_of_birth'],
		'address' => $request['address'],
		'contact_number' => $request['contact_number'],
		'student_type' => $request['student_type'],
		'status' => $request['status'],
		'isCollege' => true,
	]);
	$student->account()->update(['password' => $hashed]);
	return redirect('/account/create')->with('message', 'Student created successfully!');
}
