@extends('layouts.master')
@section('title', 'Add Subjects')
@section('page_header')
<i class="fas fa-book fa-fw"></i>
Add Subjects
@endsection
@section('content')
@if (session('message'))
<div class="alert alert-success" role="alert">
	{{ session('message') }}
</div>
@endif
<form action="{{ route('subject.store') }}" method="POST">
	@csrf
	<div class="form-group">
		<label for="subject_code">Subject Code</label>
		<input type="text" name="subject_code" id="">
	</div>
	<div class="form-group">
		<label for="description">Subject Name</label>
		<input type="text" name="description" id="">
	</div>
	<div class="form-group">
		<label for="year_level">Year Level</label>
		<input type="text" name="year_level" id="">
	</div>
	<div class="form-group">
		<label for="semester">Semester</label>
		<input type="text" name="semester" id="">
	</div>
	<div class="form-group">
		<label for="total_units">Total units of Subject</label>
		<input type="number" name="total_units" id="">
	</div>
	<div class="form-group">
		<label for="prerequisites">Prerequisites</label>
		<input type="text" name="prerequisites" id="">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Add</button>
	</div>
</form>
@endsection