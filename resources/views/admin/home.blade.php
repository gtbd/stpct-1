@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
            @endif
            <div class="d-flex  justify-content-end">
                <a href="#" class="btn btn-primary mb-2">
                    <i class="fas fa-plus"></i> Add Account
                </a>
            </div>
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                <div class="card-body">

                    You are logged in as {{ Auth::user()->admin->firstname }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
