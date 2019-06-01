@extends('layouts.master')
@section('title', 'Admin Login')
@section('page_header')
<i class="fas fa-fw fa-chart-bar"></i>
Dashboard
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        @if (session('verification'))
        <div class="alert alert-success" role="alert">
            {{ session('verification') }}
        </div>
        @endif
        <div class="card card-treemoss">
            <div class="card-header">
                <i class="fas fa-user-lock"></i> Admin Login
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email')||$errors->has('credentials') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password')||$errors->has('credentials') ? ' is-invalid' : '' }}" name="password">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        @if ($errors->has('credentials'))
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('credentials') }}</strong>
                        </div>
                        @endif
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- phone mask -->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                        @endif
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection