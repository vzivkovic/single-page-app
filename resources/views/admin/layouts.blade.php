<!DOCTYPE html>
<html>
<head>
  <title>Mateović</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <!-- styles -->
  <link href="{{ mix('/css/admin.css') }}" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <!-- Logo -->
        <div class="logo">
          <h1><a href="index.html">Site name</a></h1>
        </div>
      </div>
      <div class="col-md-5">
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="navbar navbar-inverse" role="banner">
          <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ ucfirst(auth()->user()->name) }} <b class="caret"></b></a>
                <ul class="dropdown-menu animated fadeInUp">
                  <li><a href="{{ route('users.show') }}">Profile</a></li>
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-content">
  <div class="row">
    <div class="col-md-2">
      <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
          <!-- Main menu -->
          <li class="current"><a href="{{ route('home') }}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
          <li><a href="{{ route('welcome.show') }}"><i class="glyphicon glyphicon-calendar"></i> Welcome Page</a></li>
          <li><a href="{{ route('images.index') }}"><i class="glyphicon glyphicon-stats"></i> Our Recent Work</a></li>
          <li><a href="{{ route('contacts.show') }}"><i class="glyphicon glyphicon-list"></i> Contact Page</a></li>
          <li><a href="{{ route('catalogs.show') }}"><i class="glyphicon glyphicon-record"></i> Catalog</a></li>
          <li><a href="{{ route('users.show') }}"><i class="glyphicon glyphicon-user"></i> User</a></li>

          {{--
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                      <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Pages
                        <span class="caret pull-right"></span>
                      </a>
                      <!-- Sub menu -->
                      <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Signup</a></li>
                      </ul>
                    </li>
                      --}}
        </ul>
      </div>
    </div>
    {{-- yeald area --}}
        <div class="col-md-10">
            @yield('content')
        </div>

  </div>
</div>

<footer>
  <div class="container">

    <div class="copy text-center">
      Copyright 2017 <a href='#'>Website</a>
    </div>

  </div>
</footer>

<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/app.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/admin.js"></script>
</body>
</html>
