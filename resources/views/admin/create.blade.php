@extends('layouts.master')
@section('page_header')
<i class="fas fa-fw fa-users"></i>
Add Staff
@endsection
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('account.index') }}">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <div class="input-group">

                                <input id="firstname" type="firstname" class="form-control{{ $errors->has('firstname')? ' is-invalid' : '' }}" name="firstname" autofocus>
                                @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <div class="input-group">

                                <input id="firstname" type="firstname" class="form-control{{ $errors->has('firstname')? ' is-invalid' : '' }}" name="firstname" autofocus>
                                @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="middlename">Middlename</label>
                            <div class="input-group">
                                <input id="middlename" type="middlename" class="form-control{{ $errors->has('middlename')? ' is-invalid' : '' }}" name="middlename" autofocus>
                                @if ($errors->has('middlename'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('middlename') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <div class="input-group">
                                <input id="lastname" type="lastname" class="form-control{{ $errors->has('lastname')? ' is-invalid' : '' }}" name="lastname" autofocus>
                                @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="extension_name">Extension Name</label>
                            <div class="input-group">
                                <input id="extension_name" type="extension_name" class="form-control{{ $errors->has('extension_name')? ' is-invalid' : '' }}" name="extension_name" autofocus>
                                @if ($errors->has('extension_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('extension_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <div class="input-group">
                                <input id="contact_number" type="contact_number" class="form-control{{ $errors->has('contact_number')? ' is-invalid' : '' }}" name="contact_number" autofocus>
                                @if ($errors->has('contact_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('contact_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Email Address</label>
                            <div class="input-group">
                                <input id="email" type="email" class="form-control{{ $errors->has('email')? ' is-invalid' : '' }}" name="email" autofocus>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password')? ' is-invalid' : '' }}" name="password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <div class="input-group">
                                <input id="date_of_birth" type="date_of_birth" class="form-control{{ $errors->has('date_of_birth')? ' is-invalid' : '' }}" name="date_of_birth" autofocus>
                                @if ($errors->has('date_of_birth'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date_of_birth') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <div class="input-group">
                                <input id="address" type="address" class="form-control{{ $errors->has('address')? ' is-invalid' : '' }}" name="address" autofocus>
                                @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="row">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-{{ authCss() }}">
                            Add Account
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- $2y$10$IPXz.AkFXOW0Ef9K3v1sKO2yGS.t8AjJgoZ5k1OCDy04th6CmP9q2 --}}
@endsection