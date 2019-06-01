@extends('layouts.master')
@section('page_header')
<i class="fas fa-fw fa-chart-bar"></i>
Dashboard
@endsection
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
            @endif
            @if(Auth::user()->account_type == 'Student')
            <div class="d-flex">
                <div class="justify-content-end">
                    <a href="{{ route('print') }}" class="btn btn-outline-info"><i class="fas fa-print"></i></a>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in as {{ Auth::user()->account_type }}!
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
@if(is_admin())
@include('..admin.dashboard.reports')
@endif

</div>
{{-- $2y$10$IPXz.AkFXOW0Ef9K3v1sKO2yGS.t8AjJgoZ5k1OCDy04th6CmP9q2 --}}
@endsection
