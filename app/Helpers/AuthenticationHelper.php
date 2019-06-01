<?php
	
function is_admin() {
	if (Auth::user()->account_type == 'Admin') {
		return true;
	}
}
function is_student() {
	if (Auth::user()->account_type == 'Student') {
		return true;
	}
}
function is_shs() {
	if (Auth::user()->student->isCollege == false) {
		return true;
	}
}
function is_college() {
	if (Auth::user()->student->isCollege == true) {
		return true;
	}
}