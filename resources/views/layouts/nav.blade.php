<nav class="navbar navbar-expand-md navbar-light nav-stpct">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo-green-txt-v4.svg') }}"  width="310" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if(Auth::user())
                @if(Auth::user()->hasVerifiedEmail())
                    @if(Gate::allows('createStaff', 'App\Account') || Gate::allows('createStudent', 'App\Account'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('account.create') }}">{{ __('Accounts') }}</a>
                    </li>
                    @endif
                    @if(Gate::allows('createEnrollment', 'App\Enrollment'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('declare') }}">{{ __('Declare Enrollment') }}</a>
                    </li>
                    @endif
                    @if(Gate::allows('addSubjects', 'App\Subject'))
                    <a class="nav-link" href="{{ route('subject.create') }}">{{ __('Add Subjects') }}</a>
                    @endif
                    @if(Gate::allows('viewEnrollment', 'App\Enrollment'))
                    <a class="nav-link" href="{{ route('enrollment') }}">{{ __('Enrollment') }}</a>
                    @endif
                @else
                    {{-- <a class="nav-link" href="{{ route('verification.notice') }}">{{ __('Email Verify') }}</a> --}}
                @endif

                @endif

                        {{--if(Auth::user()->account_type == 'Admin')
                        @endif--}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Admin') }}</a>
                        </li>
                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{ route('head_teacher.login') }}">{{ __('Head Teacher') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cashier.login') }}">{{ __('Cashier') }}</a>
                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faculty.login') }}">{{ __('Teacher') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('registrar.login') }}">{{ __('Registrar') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student.login') }}">{{ __('Student') }}</a>
                        </li> 
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                @switch(Auth::user()->account_type)
                                @case('Admin')
                                {{ Auth::user()->admin->firstname }}
                                @break
                                @case('Head Teacher')
                                {{ Auth::user()->headTeacher->firstname }}
                                @break
                                @case('Faculty')
                                {{ Auth::user()->faculty->firstname }}
                                @break
                                @case('Registrar')
                                {{ Auth::user()->registrar->firstname }}
                                @break
                                @case('Student')
                                {{ Auth::user()->student->firstname }}
                                @break
                                @endswitch
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard') }}"> {{ __('Dashboard') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>