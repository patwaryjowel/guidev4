<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Adtron - Responsive Bootstrap 4 Admin Template</title>
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
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.min.css')}}" />
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
                                    <!-- Notification Start -->
                                    <li class="nav-item dropdown notification">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="icon"><i data-feather="bell"></i></span>
                                            <span class="badge badge-dot badge-success">badge</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small primary"><i data-feather="user"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">New User Register</h5>
                                                        <p class="media-text">5 min ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small"><img src="{{asset('admin/assets/images/message/thumb-2.jpg')}}" alt="" /></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title"><span>James</span> send you a message</h5>
                                                        <p class="media-text">15 min ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small danger"><i data-feather="frown"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">Product shipping cancel</h5>
                                                        <p class="media-text">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small success"><i data-feather="gift"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">New Order received</h5>
                                                        <p class="media-text">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small warning"><i data-feather="alert-triangle"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">Server Limit Reached!</h5>
                                                        <p class="media-text">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <!-- Notification End -->

                                    <!-- Message Start -->
                                    <li class="nav-item dropdown message">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="icon"><i data-feather="message-square"></i></span>
                                            <span class="badge badge-dot badge-success">badge</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small"><img src="{{asset('admin/assets/images/message/thumb-1.jpg')}}" alt="" /></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">Tyler <span class="small">10 min ago</span></h5>
                                                        <p class="media-text">Product inquiry</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small"><img src="{{asset('admin/assets/images/message/thumb-2.jpg')}}" alt="" /></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">James <span class="small">1 hours ago</span></h5>
                                                        <p class="media-text">Hi buddy, are you coming to the reunion</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small"><img src="{{asset('admin/assets/images/message/thumb-3.jpg')}}" alt="" /></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">Louis <span class="small">1 hours ago</span></h5>
                                                        <p class="media-text">Client meeting</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Message End -->

                                    <!-- User Start -->
                                    <li class="nav-item dropdown user">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="name">Mr. Doe</span>
                                            <span class="thumbnail">
										<img src="{{asset('admin/assets/images/user/thumb-small.jpg')}}" alt="User Thumbnail Image" />
									</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('profile.admin-show')}}"><i data-feather="user"></i> Profile</a>
                                           <!--  <a class="dropdown-item" href="#"><i data-feather="mail"></i> Inbox</a>
                                            <a class="dropdown-item" href="#"><i data-feather="lock"></i> Lock Screen</a> -->
                                           <!--  <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Sign Out</a>
 -->


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
                        <li><a href="#"><i data-feather="home" class="nav-icon"></i>Dashdoards</a></li>
                        <!-- <li><a href="index.html">BD locals tours</a></li> -->
                        <li><a href="{{route('backend.manageslider')}}">Manage Slider</a></li>
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
                    <p class="text-muted">2020 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
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