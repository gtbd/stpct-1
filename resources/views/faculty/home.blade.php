@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    You are logged in as {{ Auth::user()->admin->firstname }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
