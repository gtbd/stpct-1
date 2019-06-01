<div class="user-panel mt-3 pb-3 mb-3 border-whitesmoke d-flex" style="border-bottom: 1px solid gray;">
	<div class="image">
		<img src="https://www.w3schools.com/w3images/avatar2.png" class="img-circle elevation-2" alt="User Image">
	</div>
	<div class="info">
		@if($user = Auth::user())
		@switch($user->account_type)
		@case("Admin")
		<a href="#" class="d-block links text-white">{{ Auth::user()->admin->firstname.' '.Auth::user()->admin->lastname }}</a>
		@break
		@case("Faculty")
		<a href="#" class="d-block links text-white">{{ Auth::user()->faculty->firstname.' '.Auth::user()->admin->lastname }}</a>
		@break
		@case("Registrar")
		<a href="#" class="d-block links text-white">{{ Auth::user()->registrar->firstname.' '.Auth::user()->admin->lastname }}</a>
		@break
		@case("Cashier")
		<a href="#" class="d-block links text-white">{{ Auth::user()->cashier->firstname.' '.Auth::user()->admin->lastname }}</a>
		@break
		@case("Head Teacher")
		<a href="#" class="d-block links text-white">{{ Auth::user()->headTeacher->firstname.' '.Auth::user()->admin->lastname }}</a>
		@break
		@endswitch
		@else
		<a href="#" class="d-block links text-white">Guest</a>
		@endif
		
	</div>
</div>