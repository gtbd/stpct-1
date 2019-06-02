<?php

use App\Http\Controllers\AccountController;
use App\Notifications\AccountVerification;


function generatedPassword($data){
	return Hash::make($data);
}
function create_admin($account){
	$admin = $account->admin()->create([
		'firstname' => request('firstname'),
		'middlename' => request('middlename'),
		'lastname' => request('lastname'),
		'extension_name' => request('extension_name'),
		'date_of_birth' => request('date_of_birth'),
		'address' => request('address'),
		'contact_number' => request('contact_number'),
	]);
	$generated = generatedPassword($admin->id);
	$hashed = Hash::make($generated);
	$admin->account()->update(['password' => $hashed]);
	$account->notify(new AccountVerification($admin, $generated));
	

}
function create_faculty($account){
	$faculty = $account->faculty()->create([
		'firstname' => request('firstname'),
		'middlename' => request('middlename'),
		'lastname' => request('lastname'),
		'extension_name' => request('extension_name'),
		'date_of_birth' => request('date_of_birth'),
		'address' => request('address'),
		'department' => request('department'),
		'contact_number' => request('contact_number'),
		'faculty_type' => request('faculty_type'),
	]);
	$generated = generatedPassword($faculty->id);
	$hashed = Hash::make($generated);
	$faculty->account()->update(['password' => $hashed]);
	$account->notify(new AccountVerification($faculty, $generated));
	
}
function create_registrar($account){
	$registrar = $account->registrar()->create([
		'firstname' => request('firstname'),
		'middlename' => request('middlename'),
		'lastname' => request('lastname'),
		'extension_name' => request('extension_name'),
		'date_of_birth' => request('date_of_birth'),
		'address' => request('address'),
		'contact_number' => request('contact_number'),
	]);
	$generated = generatedPassword($registrar->id);
	$hashed = Hash::make($generated);
	$registrar->account()->update(['password' => $hashed]);
	$account->notify(new AccountVerification($registrar, $generated));
	
}
function create_cashier($account){
	$cashier = $account->cashier()->create([
		'firstname' => request('firstname'),
		'middlename' => request('middlename'),
		'lastname' => request('lastname'),
		'extension_name' => request('extension_name'),
		'date_of_birth' => request('date_of_birth'),
		'address' => request('address'),
		'contact_number' => request('contact_number'),
	]);
	$generated = generatedPassword($cashier->id);
	$hashed = Hash::make($generated);
	$cashier->account()->update(['password' => $hashed]);
	$account->notify(new AccountVerification($cashier, $generated));
	
}
function create_headTeacher($account){
	$head_teacher = $account->headTeacher()->create([
		'firstname' => request('firstname'),
		'middlename' => request('middlename'),
		'lastname' => request('lastname'),
		'extension_name' => request('extension_name'),
		'date_of_birth' => request('date_of_birth'),
		'address' => request('address'),
		'contact_number' => request('contact_number'),
	]);
	$generated = generatedPassword($head_teacher->id);
	$hashed = Hash::make($generated);
	$head_teacher->account()->update(['password' => $hashed]);
	$account->notify(new AccountVerification($head_teacher, $generated));
	
}
function create_student($account){
	$student = $account->student()->create([
		'firstname' => request('firstname'),
		'middlename' => request('middlename'),
		'lastname' => request('lastname'),
		'course' => request('course'),
		'extension_name' => request('extension_name'),
		'date_of_birth' => request('date_of_birth'),
		'address' => request('address'),
		'contact_number' => request('contact_number'),
		'student_type' => request('student_type'),
		'status' => request('status'),
		'isCollege' => true,
	]);
	$generated = generatedPassword($student->id);
	$hashed = Hash::make($generated);
	$student->account()->update(['password' => $hashed]);
	$account->notify(new AccountVerification($student, $generated));
	
}
