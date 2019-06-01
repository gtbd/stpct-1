@extends('layouts.master')
@section('page_header')
<i class="fas fa-fw fa-sticky-note"></i>
Create Post
@endsection
@section('secondary')
@if(session('created'))
<div class="card card text-white bg-success  ml-auto" style="max-width: 18rem;">
    <div class="card-header">
        {{ session('created') }}
    </div>
</div>
@endif
@endsection
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('post.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <div class="input-group">

                                <input id="title" type="title" class="form-control{{ $errors->has('title')? ' is-invalid' : '' }}" name="title" autofocus>
                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <div class="input-group">
                                <textarea id="description" cols="30" rows="10" class="form-control{{ $errors->has('description')? ' is-invalid' : '' }}" name="description" autofocus>
                                </textarea>
                                @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-{{ authCss() }}">
                                Create Post
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- $2y$10$IPXz.AkFXOW0Ef9K3v1sKO2yGS.t8AjJgoZ5k1OCDy04th6CmP9q2 --}}
    @endsection