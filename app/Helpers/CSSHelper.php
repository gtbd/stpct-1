<?php

function authCss(){
	if (Auth::check()) {
		switch (Auth::user()->account_type) {
			case 'Admin':
			return 'huntergreen';
			break;
			case 'Head Teacher':
			return 'treemoss';
			break;
			case 'Faculty':
			return 'mediumseagreen';
			break;
			case 'Registrar':
			return 'forestgreen';
			break;
			case 'Cashier':
			return 'jadegreen';
			break;
			case 'Student':
			return 'limegreen';
			break;
		}
	}
	else{
		return 'balticsea';
	}
}

function textDisabled(){
	if (is_student()) {
		return 'disabled';
	}
}