<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tours Local Guide Supper User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.css')}}">

<style type="text/css">
  

  body:not(.sidebar-mini-md) .content-wrapper, body:not(.sidebar-mini-md) .main-footer, body:not(.sidebar-mini-md) .main-header {
    transition: margin-left .3s ease-in-out;
    margin-left: 250px;
    margin-left: 0;
}
</style>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="header-logo col-auto d-none d-sm-flex ml-2">
          <a href="{{route('front.index')}}">
              
              <span class="logo-default">
                  <img src="{{asset('admin/assets/images/logo/logo-default.png')}}" alt="Logo Default" />
                  <img src="{{asset('admin/assets/images/logo/logo-default-light.png')}}" class="light" alt="Logo Default" />
              </span>
          </a>
      </div>
    <div class="header-right flex-grow-1 col-auto">
        <div class="row justify-content-between align-items-center">
            <!-- SideNav Toggle & Search Start -->
            <div class="d-flex col-auto">
                <!-- SideNav Toggle Start -->
                <button class="sidenav-toggle d-lg-none"><i data-feather="menu"></i></button>
                <!-- SideNav Toggle End -->
            </div>
            <!-- SideNav Toggle & Search End -->

            <!-- Header Actions (Header Right) Start -->
            <div class="col-auto">
                <ul class="header-right-action nav">

                    @yield('notification')
                    
                    <!-- User Start -->
                    <li class="nav-item dropdown user supper-admin-profile">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <span class="name">Jowel</span>
                            <span class="thumbnail">
                              <img src="{{asset('admin/assets/images/user/thumb-small.jpg')}}" alt="User Thumbnail Image" />
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('profile.admin-show')}}"><i data-feather="user"></i> Profile</a>
                          
                            <a class="dropdown-item" href="{{route('admin.dashboard')}}"><i data-feather="user"></i> Dashboard</a>
                            <a class="dropdown-item" href="{{route('profile.setting')}}"><i data-feather="user"></i> Setting</a>
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
                    <!-- User End -->
                </ul>
            </div>
            <!-- Header Actions (Header Right) End -->
        </div>
    </div>
    
  </nav>
  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <p>&copy; 2021 <a href="#">Tour Guide BD. </a> Designed By Jowel & Murad</p>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
</body>
</html>
