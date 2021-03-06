  @section('header')

          <!DOCTYPE html>
  <html lang="en">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>ALLRAHIM</title>
      <!-- Custom fonts for this template-->
      <link href="{{url('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Page level plugin CSS-->
      <link href="{{url('backend/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="{{url('backend/css/sb-admin.css')}}" rel="stylesheet">
      <link href="{{url('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

      <!-- Page level plugin CSS-->
      <link href="{{url('backend/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="{{url('backend/css/sb-admin.css" rel="stylesheet')}}">

  </head>
  <body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="">ALLRAHIM</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" >
          <div class="input-group">
              <input type="hidden" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
              </div>
          </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <form action="{{ url('/logout') }}" method="post">
                      <li><button class="dropdown-item" type="submit">Logout</button></li>
                      <input type="hidden"  name="_token" value="{{ csrf_token() }}">
                    </form>
              </div>
          </li>
{{--          <li class="nav-item dropdown mr-4">--}}
{{--              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                  <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}--}}
{{--              </a>--}}
{{--              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                  @foreach (Config::get('languages') as $lang => $language)--}}
{{--                      @if ($lang != App::getLocale())--}}
{{--                          <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>--}}
{{--                      @endif--}}
{{--                  @endforeach--}}
{{--              </div>--}}
{{--          </li>--}}
      </ul>

  </nav>

  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{route('admin')}}">
                      <i class="fa fa-book"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-tie"></i>
                  <span>Job Request</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                  <a class="dropdown-item" href="{{route('employerRequest')}}">Employer</a>
                  <a class="dropdown-item" href="{{route('employerPendingRequest')}}">Pending Request</a>
                  <hr>
                  <a class="dropdown-item" href="{{route('employeeRequest')}}">Employee</a>
                  <a class="dropdown-item" href="{{route('employeePendingRequest')}}">Pending Request</a>
              </div>
          </li>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-list"></i>
                <span>Job Details</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('employerList')}}">Employer</a>
                <a class="dropdown-item" href="{{route('employeeList')}}">Employee</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-users"></i>
                <span>Users</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="#">List</a>
            </div>
        </li>
      </ul>
      <div id="content-wrapper">
  @stop
