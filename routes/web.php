<?php

use App\Enrollment;
use App\Mail\EmailVerified;
use App\Subject;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Admin\PostController@index')->name('home');
Route::get('ab', function (){
	$enrollment  = Carbon::parse(Enrollment::latest()->get()->first())->isoFormat('MMMM D, YYYY');
	dd($enrollment);
});

Route::get('/auth', function (){
	Subject::all();
	$e = Enrollment::latest()->get();
	return view('test', compact('e'));
});

Route::post('logout', 'AccountController@logout')->name('account.logout');
Route::get('profile', 'AccountController@profile')->name('account.profile');

//----------------Registrar Auth

/*Route::get('/registrar', 'RegistrarController@index')->name('registrar.home');
Route::get('/registrar/login', 'RegistrarAuth\LoginController@showLoginForm')->name('registrar.login');
Route::post('/registrar/login', 'RegistrarAuth\LoginController@login');
Route::post('/registrar/logout', 'RegistrarAuth\LoginController@logout')->name('registrar.logout');
Route::post('/registrar/password/email', 'RegistrarAuth\ForgotPasswordController@sendResetLinkEmail')->name('registrar.password.email');
Route::get('/registrar/password/reset', 'RegistrarAuth\ForgotPasswordController@showLinkRequestForm')->name('registrar.password.request');
Route::post('/registrar/password/reset', 'RegistrarAuth\ResetPasswordController@reset')->name('registrar.password.update');
Route::post('/registrar/password/reset/{token}', 'RegistrarAuth\ResetPasswordController@showResetForm')->name('registrar.password.reset');
Route::get('/registrar/register', 'RegistrarAuth\RegisterController@showRegistrationForm')->name('registrar.register');
Route::post('/registrar/register', 'RegistrarAuth\RegisterController@register');*/


//----------------Faculty Auth

/*Route::get('/faculty', 'FacultyController@index')->name('faculty.home');
Route::get('/faculty/login', 'FacultyAuth\LoginController@showLoginForm')->name('faculty.login');
Route::post('/faculty/login', 'FacultyAuth\LoginController@login');
Route::post('/faculty/logout', 'FacultyAuth\LoginController@logout')->name('faculty.logout');
Route::post('/faculty/password/email', 'FacultyAuth\ForgotPasswordController@sendResetLinkEmail')->name('faculty.password.email');
Route::get('/faculty/password/reset', 'FacultyAuth\ForgotPasswordController@showLinkRequestForm')->name('faculty.password.request');
Route::post('/faculty/password/reset', 'FacultyAuth\ResetPasswordController@reset')->name('faculty.password.update');
Route::post('/faculty/password/reset/{token}', 'FacultyAuth\ResetPasswordController@showResetForm')->name('faculty.password.reset');
Route::get('/faculty/register', 'FacultyAuth\RegisterController@showRegistrationForm')->name('faculty.register');
Route::post('/faculty/register', 'FacultyAuth\RegisterController@register');*/


//----------------Admin Auth



	// Route::get('/dashboard', 'AdminController@index');




Route::prefix('admin')->group(function (){ 						// admin/users
	Route::post('declare/enrollment', 'EnrollmentController@store')->name('declare.enrollment');
	Route::put('declare/enrollment/', 'EnrollmentController@toggle')->name('declare.enrollment.toggle');
	Route::get('declare/enrollment', 'EnrollmentController@declareEnrollment')->name('declare');
	Route::get('subject/create', 'SubjectController@create')->name('subject.create');
	Route::post('subject/create', 'SubjectController@store')->name('subject.store');
	Route::get('post/create', 'Admin\PostController@create')->name('post.create');
	Route::post('post/create', 'Admin\PostController@store')->name('post.store');
	Route::namespace('Admin')->group(function (){ 						// Admin/Auth
		Route::namespace('AdminAuth')->group(function (){
			Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
			Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
			Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
			Route::post('login', 'LoginController@login');
			Route::post('register', 'RegisterController@register'); // admin.name
			Route::name('admin.')->group(function (){
				Route::get('login', 'LoginController@showLoginForm')->name('login');
				
				Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
				Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
				Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
				Route::post('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
				Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
			});
		});
	});
});



//----------------Student Auth


Route::namespace('Student')->group(function (){
	// Route::get('/dashboard', 'StudentController@index');
	Route::prefix('student')->group(function (){
		Route::namespace('StudentAuth')->group(function (){
			Route::post('login', 'LoginController@login');
			Route::post('register', 'RegisterController@register');
			Route::name('student.')->group(function (){
				Route::get('login', 'LoginController@showLoginForm')->name('login');
				
				Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
				Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
				Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
				Route::post('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
				Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
			});
		});
	});
});

//----------------HeadTeacher Auth


Route::namespace('HeadTeacher')->group(function (){
	Route::prefix('headTeacher')->group(function (){
		Route::namespace('HeadTeacherAuth')->group(function (){
			Route::post('login', 'LoginController@login');
			Route::post('register', 'RegisterController@register');
			Route::name('headTeacher.')->group(function (){
				Route::get('login', 'LoginController@showLoginForm')->name('login');
				
				Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
				Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
				Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
				Route::post('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
				Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
			});
		});
	});
});


//----------------Faculty Auth


Route::namespace('Faculty')->group(function (){
	Route::prefix('faculty')->group(function (){
		Route::namespace('FacultyAuth')->group(function (){
			Route::post('login', 'LoginController@login');
			Route::post('register', 'RegisterController@register');
			Route::name('faculty.')->group(function (){
				Route::get('login', 'LoginController@showLoginForm')->name('login');
				
				Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
				Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
				Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
				Route::post('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
				Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
			});
		});
	});
});


//----------------Registrar Auth


Route::namespace('Registrar')->group(function (){
	Route::prefix('registrar')->group(function (){
		Route::namespace('RegistrarAuth')->group(function (){
			Route::post('login', 'LoginController@login');
			Route::post('register', 'RegisterController@register');
			Route::name('registrar.')->group(function (){
				Route::get('login', 'LoginController@showLoginForm')->name('login');
				
				Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
				Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
				Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
				Route::post('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
				Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
			});
		});
	});
});



//----------------Cashier Auth


Route::namespace('Cashier')->group(function (){
	Route::prefix('cashier')->group(function (){
		Route::namespace('CashierAuth')->group(function (){
			Route::post('login', 'LoginController@login');
			Route::post('register', 'RegisterController@register');
			Route::name('cashier.')->group(function (){
				Route::get('login', 'LoginController@showLoginForm')->name('login');
				
				Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
				Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
				Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
				Route::post('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
				Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
			});
		});
	});
});


//----------------Student Auth


Route::namespace('Student')->group(function (){
	Route::prefix('student')->group(function (){
		Route::namespace('StudentAuth')->group(function (){
			Route::post('login', 'LoginController@login');
			Route::post('register', 'RegisterController@register');
			Route::name('student.')->group(function (){
				Route::get('login', 'LoginController@showLoginForm')->name('login');
				
				Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
				Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
				Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
				Route::post('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
				Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
			});
		});
	});
});


/*Route::get('/registrar', 'RegistrarController@index')->name('registrar.home');
Route::get('/registrar/login', 'RegistrarAuth\LoginController@showLoginForm')->name('registrar.login');
Route::post('/registrar/login', 'RegistrarAuth\LoginController@login');
Route::post('/registrar/logout', 'RegistrarAuth\LoginController@logout')->name('registrar.logout');
Route::post('/registrar/password/email', 'RegistrarAuth\ForgotPasswordController@sendResetLinkEmail')->name('registrar.password.email');
Route::get('/registrar/password/reset', 'RegistrarAuth\ForgotPasswordController@showLinkRequestForm')->name('registrar.password.request');
Route::post('/registrar/password/reset', 'RegistrarAuth\ResetPasswordController@reset')->name('registrar.password.update');
Route::post('/registrar/password/reset/{token}', 'RegistrarAuth\ResetPasswordController@showResetForm')->name('registrar.password.reset');
Route::get('/registrar/register', 'RegistrarAuth\RegisterController@showRegistrationForm')->name('registrar.register');
Route::post('/registrar/register', 'RegistrarAuth\RegisterController@register');*/




// Route::get('/dashboard', 'AccountController@dashboard');
Route::get('/dashboard','AccountController@dashboard')->name('dashboard')->middleware('verified');
/*Route::get('/student', 'StudentController@index')->name('student.home');
Route::get('/student/login', 'StudentAuth\LoginController@showLoginForm')->name('student.login');
Route::post('/student/login', 'StudentAuth\LoginController@login');
Route::post('/student/logout', 'StudentAuth\LoginController@logout')->name('student.logout');
Route::post('/student/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
Route::get('/student/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
Route::post('/student/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('student.password.update');
Route::post('/student/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm')->name('student.password.reset');
Route::get('/student/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('student.register');
Route::post('/student/register', 'StudentAuth\RegisterController@register');*/




Route::resource('account', 'AccountController');
Route::get('/enrollment', 'EnrollmentController@showEnrollment')->name('enrollment');


// Route::get('/admin/enrollment', 'EnrollmentController@showEnrollment');

Route::get('/print', 'AccountController@viewAssessment')->middleware('auth')->name('print');
/*Route::get('/print', function (){
	$user = Auth::user()->registrar;
	dd($user->firstname);
	$pdf = PDF::loadView('print', $user);
	return $pdf->stream('invoice.pdf');
})->middleware('auth');*/


Route::get("/mail?email=zeuszen11@gmail.com", function (Request $request){
	
});

Route::get('test', 'ClassController@index');

