<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') | St. Peter College of Technology</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom-dash border-{{ authCss() }}">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        @if(Auth::check())
        <li class="nav-item">
          <form id="logout" action="{{ route('account.logout') }}" method="POST">
            @csrf
            <a class="nav-link" href="{{ route('account.logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit()">
              <i class="fas fa-sign-out-alt" ></i>
            </a>
          </form>
        </li>
        @endif
      </ul>
        {{-- 
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> --}}

        <!-- Right navbar links -->

      </nav>
      <aside class="main-sidebar sidebar-dark-dark bg-{{ authCss() }} elevation-4">
        <a href="{{ route('home') }}" class="brand-link border-white ">
          <img src="{{ asset('images/logo.png') }}" alt="STPCT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">STPCT</span>
        </a>
        <div class="sidebar">
          @include('layouts.sidenav_name')
          @include('layouts.sidenav')
        </div>
      </aside>
      @if(Auth::user())
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                  @yield('page_header')
                </h1>
              </div>
              <div class="col-sm-6">
                @yield('enrollment.toggle')
              </div>
            </div>
          </div>
        </div>
        @yield('content')
      </div>
      @else
      <div class="content-wrapper">
        @yield('content')
      </div>
      @endif
    </div>
  </div>
  <footer class="main-footer border-top-dash border-{{ authCss() }}">
    <div class="float-right d-none d-sm-inline">
      St. Peter College of Technology
    </div>
    <strong>Copyright &copy; 2014-2018 <a class="text-muted" href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/textFit.js"></script>
<script>
  textFit(document.querySelector(".links"));
</script>
</body>
</html>