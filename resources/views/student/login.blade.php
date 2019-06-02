@extends('layouts.master')
@section('title', 'Student Login')
@section('content')
<div class="container-fluid align-items-center justify-content-center d-flex" style="height: 100vh">
    <div class="row">
        <div class="col-md-4">
            @if (session('verification'))
            <div class="alert alert-success" role="alert">
                {{ session('verification') }}
            </div>
            @endif
            <div class="card" style="width: 30vw; height: 70vh">
                <div class="card-header">
                    <i class="fas fa-users"></i> Student Login
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('student.login') }}">
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
                            <button type="submit" class="btn btn-limegreen">
                                Login
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection