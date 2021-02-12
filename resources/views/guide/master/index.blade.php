<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Guide User Dashboard</title>

  @yield('stylesheet')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="@if(Auth::user()->utype == 'admin')
          {{ route('admin.dashboard') }}
          @elseif(Auth::user()->utype == 'guide')
          {{ route('guide.dashboard') }}
          @else
          {{ route('dashboard') }}
          @endif" class="nav-link">
          Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <a class="dropdown-item" href="{{route('profile.guide-show')}}"><i data-feather="user"></i> Profile </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <i data-feather="log-out"></i>Sign Out
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
          </form>
     
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('front.index')}}" class="brand-link">
      <img src="{{asset('images/logo/logo.png')}}" alt="Logo" class="brand-image">
      <span class="brand-text font-weight-light" style="opacity: 0">For guide</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a class="nav-link" href="{{route('guide.dashboard')}}"><i data-feather="user"></i> <p>Order Stats</p>  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile.guide-show')}}"><i data-feather="user"></i> <p>Profile</p>  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile.setting')}}"><i data-feather="user"></i> Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i data-feather="log-out"></i> <p> Sign Out</p> 
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <p>©2021 <strong>BD local Guide</strong>. made with ❤️ by <a href="#">JOWEL</a></p>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@yield('script')
</body>
</html>
