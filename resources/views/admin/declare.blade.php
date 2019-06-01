@extends('layouts.master')
@section('title', 'Declare Enrollment')
@section('page_header')
<i class="fas fa-fw fa-school nav-icon"></i>
Enrollment
@endsection
@section('enrollment.toggle')
@include('admin.enrollment.toggle')
@endsection
@section('content')
@if (session('message'))
<div class="alert alert-success" role="alert">
	{{ session('message') }}
</div>
@endif
{{-- 
	Check if today enrollment is enrollment
	Check if 
 --}}

@endsection