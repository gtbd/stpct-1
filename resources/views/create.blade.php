@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-12">
		@if(session('message'))
		{{ session('message') }}
		@endif
		@can('createStaff', 'App\Account')
		@include('admin.create')
		@endcan

		@can('createStudent', 'App\Account')
		@include('registrar.create')
		@endcan
	</div>
</div>
@endsection
