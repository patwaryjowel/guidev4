<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Tour Guide Supper Admin</title>
    <meta name="description" content="Admin Template to use in any Backend Development" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/images/favicon.ico')}}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/vendor.min.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/simplebar.css')}}" />

   
    <!-- Plugin CSS (Plugins Files for only this Page) -->
    @yield('customcss')

   

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}" />
</head>

<body>
    <div class="main-wrapper">
        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto d-none d-sm-flex">
                        <a href="{{route('front.index')}}">
                            <span class="logo-icon">
                                <img src="{{asset('admin/assets/images/logo/logo-icon.png')}}" alt="Logo Icon" />
                                <img src="{{asset('admin/assets/images/logo/logo-icon-light.png')}}" class="light" alt="Logo Icon" />
					        </span>
                           
                            <span class="logo-default">
                                <img src="{{asset('admin/assets/images/logo/logo-default.png')}}" alt="Logo Default" />
                                <img src="{{asset('admin/assets/images/logo/logo-default-light.png')}}" class="light" alt="Logo Default" />
                            </span>
                        </a>


                       <!--  <h3> <a href="{{route('front.index')}}">Home</a></h3> -->
                    </div>
                    <!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
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
                                    <li class="nav-item dropdown user">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="name">Mr. Jowel</span>
                                            <span class="thumbnail">
										<img src="{{asset('admin/assets/images/user/thumb-small.jpg')}}" alt="User Thumbnail Image" />
									</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('profile.admin-show')}}"><i data-feather="user"></i> Profile</a>
                                          <!--   <a class="dropdown-item" href="#"><i data-feather="mail"></i> Inbox</a>
                                            <a class="dropdown-item" href="#"><i data-feather="lock"></i> Lock Screen</a>
                                          <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Sign Out</a> -->



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
                    <!-- Header Right End -->
                </div>
            </div>
        </div>
        <!-- Header Section End -->
        <!-- SideNav Section Start -->
        <div class="sidenav-section" data-simplebar>
            <!-- SideNav Inner Start -->
            <div class="sidenav-inner">
                <nav class="sidenav-menu" id="sidenav-menu">
                    <ul>
                        <li><a href="{{route('admin.dashboard')}}">Dashdoards</a></li>
                        <!-- <li><a href="index.html">BD locals tours</a></li> -->
                        <li><a href="{{route('backend.manageslider')}}"> Manage Slider</a></li>
                        <li><a href="{{route('backend.tourplacearea')}}">Manage tours Place</a></li>
                        <li><a href="{{route('backend.managetestimonial')}}">Manage Testimonials</a></li>
                        <li><a href="{{route('backend.manageguide')}}">Manage Guide</a></li>
                        <li><a href="{{route('backend.manageorder')}}">Manage Order</a></li>
                        <li><a href="{{route('backend.addlocation')}}">Manage Location</a></li>
                    </ul>
                </nav>
            </div>
            <!-- SideNav Inner End -->
        </div>
        <!-- SideNav Section End -->



    @yield('content')
       

        <!-- Footer Section Start -->
        <div class="section bg-white py-4 mt-auto">
            <div class="container-fluid">
                <div class="footer-copyright text-center">
                    <p class="text-muted">&copy; 2021  <a href="#">Tour Guide BD. Designed By JP</a></p>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->

    </div>

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{asset('admin/assets/js/vendor/vendor.min.js')}}"></script>
    <!--Plugins JS-->
    <script src="{{asset('admin/assets/js/plugins/simplebar.min.js')}}"></script>

     @yield('customscript')
     @yield('customscripttwo')
     @yield('customscriptthree')

    

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
</body>

</html>