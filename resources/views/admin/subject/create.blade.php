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
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<form action="{{ route('subject.store') }}" method="POST">
				@csrf
				@method('PATCH')
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="subject_code">Subject Code</label>
							<div class="input-group">

								<input id="subject_code" type="subject_code" class="form-control{{ $errors->has('subject_code')? ' is-invalid' : '' }}" name="subject_code"  autofocus>
								@if ($errors->has('subject_code'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('subject_code') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Subject Name</label>
							<div class="input-group">

								<input id="description" type="description" class="form-control{{ $errors->has('description')? ' is-invalid' : '' }}" name="description" autofocus>
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
					<div class="col-md-5">
						<div class="form-group">
							<label for="year_level">Year Level</label>
							<div class="input-group">
								<input id="year_level" type="year_level" class="form-control{{ $errors->has('year_level')? ' is-invalid' : '' }}" name="year_level" autofocus>
								@if ($errors->has('year_level'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('year_level') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="semester">Semester</label>
							<div class="input-group">
								<input id="semester" type="semester" class="form-control{{ $errors->has('semester')? ' is-invalid' : '' }}" name="semester" autofocus>
								@if ($errors->has('semester'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('semester') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="total_units">Total Number of Units</label>
							<div class="input-group">
								<input id="total_units" type="total_units" class="form-control{{ $errors->has('total_units')? ' is-invalid' : '' }}" name="total_units" autofocus>
								@if ($errors->has('total_units'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('total_units') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<label for="prerequisites" class="m-0">Prerequisites</label>
							<div class="mb-0 mt-n1">
								<span class="small t1ext-muted d-block">
									Please separate subjects using "|".
								</span>
								<span class="small text-muted d-block">
									Eg. Math|English
								</span>
							</div>
							<div class="input-group">
								<input id="prerequisites" type="prerequisites" class="form-control{{ $errors->has('prerequisites')? ' is-invalid' : '' }}" name="prerequisites" autofocus>
								@if ($errors->has('prerequisites'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('prerequisites') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<button type="submit" class="btn btn-{{ authCss() }}">
								Add Subject
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection