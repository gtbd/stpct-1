@section('secondary')
@if(!todayIsEnrollment())
<form action="{{ route('declare.enrollment') }}" method="post">
	@csrf
	<div class="form-group">
		<label class="label" for="start_date">Start Date</label>
		<input type="date" min="{{ now()->toDateString() }}" name="start_date" id="" class="form-control" placeholder="Start Date">
	</div>
	<div class="form-group">
		<label class="label" for="end_date">End Date</label>
		<input type="date" min="{{ now()->addDay()->toDateString() }}" max="{{ now()->addMonth()->toDateString() }}" name="end_date" id="" class="form-control" placeholder="End Date">
	</div>
	<div class="form-group">
		<label class="label" for="semester">Semester</label>
		<select name="semester" id="" class="form-control">
			<option disabled="disabled" selected="selected">Select semester: </option>
			<option value="1st">1st Semester</option>
			<option value="2nd">2nd Semester</option>
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Declare Enrollment</button>
	</div>
</form>
@else
<form action="{{ route('declare.enrollment.toggle') }}" method="POST">
	@csrf
	@method('PUT')
	<!-- <div class="custom-control custom-switch">
		<input type="checkbox" class="custom-control-input" name="toggle" onclick="this.form.submit()" value="on" checked>
		<label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
	</div> -->
	@if($enrollment->status)
	<div class="custom-control custom-switch float-sm-right">
		<input type="hidden" name="toggle" value="0" class="custom-control-input">
		<input type="checkbox" class="custom-control-input" id="customSwitch1" name="toggle" onchange="this.form.submit()" checked>
		<label class="custom-control-label" for="customSwitch1">Pause enrollment ({{ ($start) }} - {{ ($end) }})</label>
	</div>
	@else
	<div class="custom-control custom-switch float-sm-right">
		<input type="checkbox" class="custom-control-input" id="customSwitch1" name="toggle" onchange="this.form.submit()" value="1">
		<label class="custom-control-label" for="customSwitch1">Continue existing enrollment ({{ ($start) }} - {{ ($end) }})</label>
	</div>
	@endif
</form>
@endif
@endsection