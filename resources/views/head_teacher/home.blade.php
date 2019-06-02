@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session->has('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    You are logged in as {{ Auth::user()->admin->firstname }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
