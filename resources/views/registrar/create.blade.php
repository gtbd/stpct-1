@section('title', 'Add Student')
@section('content')
@extends('layouts.app')
@section('title', 'Add Staff')
@section('title', 'Add Staff')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-12">
		@if(session('message'))
		{{ session('message') }}
		@endif
		<div class="card">
			<div class="card-header">{{ __('Add User') }}</div>

			<div class="card-body">
				<form method="POST" action="/account">
					@csrf
					<div class="row">
						<div class="form-group col-md-4">
							<label for="firstname" class="col-md-12 col-form-label text-md-left">{{ __('First Name') }}</label>

							<div class="col-md-12">
								<input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

								@if ($errors->has('firstname'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('firstname') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="middlename" class="col-md-12 col-form-label text-md-left">{{ __('Middle Name') }}</label>

							<div class="col-md-12">
								<input id="middlename" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename" value="{{ old('middlename') }}" autofocus>

								@if ($errors->has('middlename'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('middlename') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="lastname" class="col-md-12 col-form-label text-md-left">{{ __('Last Name') }}</label>

							<div class="col-md-12">
								<input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

								@if ($errors->has('lastname'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('lastname') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-2">
							<label for="extension_name" class="col-md-12 col-form-label text-md-left">{{ __('Ext. Name') }}</label>

							<div class="col-md-12">
								<input id="extension_name" type="text" class="form-control{{ $errors->has('extension_name') ? ' is-invalid' : '' }}" name="extension_name" value="{{ old('extension_name') }}"  autofocus>

								@if ($errors->has('extension_name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('extension_name') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-7">
							<label for="address" class="col-md-3 col-form-label text-md-left">{{ __('Address') }}</label>

							<div class="col-md-12">
								<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

								@if ($errors->has('address'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('address') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-3">
							<label for="date_of_birth" class="col-md-12 col-form-label text-md-left">{{ __('Date of Birth') }}</label>

							<div class="col-md-12">
								<input id="date_of_birth" type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus min="01-01-1930" max="31-12-2020">

								@if ($errors->has('date_of_birth'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('date_of_birth') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-3">
							<label for="contact_number" class="col-md-12 col-form-label text-md-left">{{ __('Contact Number') }}</label>

							<div class="col-md-12">
								<input id="contact_number" type="text" class="form-control{{ $errors->has('contact_number') ? ' is-invalid' : '' }}" name="contact_number" value="{{ old('contact_number') }}" required autofocus>

								@if ($errors->has('contact_number'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('contact_number') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-3">
							<label for="department" class="col-md-12 col-form-label text-md-left">{{ __('Department') }}</label>

							<div class="col-md-12">
								<input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required autofocus>

								@if ($errors->has('department'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('department') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

							<div class="col-md-12">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					<div class="row">
						<!-- <div class="form-group col-md-6">
							<label for="password" class="col-md-3 col-form-label text-md-left">{{ __('Password') }}</label>
						
							<div class="col-md-12">
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
						
								@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group col-md-6">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>
						
							<div class="col-md-12">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div> -->
						<div class="col-md-12">
							<input type="hidden" name="account_type" id="" class="form-control" value="Student">
							<div class="form-group col-md-6">
								<label for="course" class="col-md-3 col-form-label text-md-left">{{ __('Course') }}</label>

								<div class="col-md-12">
									<input id="course" type="text" class="form-control{{ $errors->has('course') ? ' is-invalid' : '' }}" name="course" value="{{ old('course') }}" required autofocus>

									@if ($errors->has('course'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('course') }}</strong>
									</span>
									@endif
								</div>
							</div>
						</div>
						<div class="form-group col-md-12">
							<div class="offset-md-4 col-md-4 offset-md-4 text-center">
								<button type="submit" class="btn btn-primary">
									{{ __('Register User') }}
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@endsection
