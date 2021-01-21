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
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins/quill.snow.css')}}" />

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
                        <a href="index.html">
                            <span class="logo-icon">
						<img src="{{asset('admin/assets/images/logo/logo-icon.png')}}" alt="Logo Icon" />
						<img src="{{asset('admin/assets/images/logo/logo-icon-light.png')}}" class="light" alt="Logo Icon" />
					</span>
                            <span class="logo-default">
						<img src="{{asset('admin/assets/images/logo/logo-default.png')}}" alt="Logo Default" />
						<img src="{{asset('admin/assets/images/logo/logo-default-light.png')}}" class="light" alt="Logo Default" />
					</span>
                        </a>
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

                                <!-- Search Start -->
                                <div class="header-search">
                                    <button class="header-search-toggle d-flex d-md-none"><i data-feather="search"></i></button>
                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="text" placeholder="Search Something..." />
                                            <button class="search-submit"><i data-feather="search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Search End -->
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
                                            <a class="dropdown-item" href="#"><i data-feather="user"></i> Profile</a>
                                            <a class="dropdown-item" href="#"><i data-feather="mail"></i> Inbox</a>
                                            <a class="dropdown-item" href="#"><i data-feather="lock"></i> Lock Screen</a>
                                            <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Sign Out</a>
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
                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="home" class="nav-icon"></i>Dashdoards<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="index.html">BD locals tours</a></li>
                                <li><a href="manage-slider.html">Manage Slider</a></li>
                                <li><a href="manage-tours-place.html">Manage tours Place</a></li>
                                <li><a href="manage-testimonials.html">Manage Testimonials</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="gift" class="nav-icon"></i>Apps<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="#">Mail</a></li>
                                <li><a href="#">Single Mail</a></li>
                                <li><a href="#">Calendar</a></li>
                                <li><a href="#">Chat</a></li>
                                <li><a href="#">Todo</a></li>
                            </ul>
                        </li>

                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="box" class="nav-icon"></i>Elements<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="elements-alerts.html">Alerts</a></li>
                                <li><a href="elements-accordions.html">Accordions</a></li>
                                <li><a href="elements-avatar.html">Avatar</a></li>
                                <li><a href="elements-badge.html">Badge</a></li>
                                <li><a href="elements-buttons.html">Buttons</a></li>
                                <li><a href="elements-carousel.html">Carousel</a></li>
                                <li><a href="elements-dropdown.html">Dropdown</a></li>
                                <li><a href="elements-list-group.html">List Group</a></li>
                                <li><a href="elements-modal.html">Modal</a></li>
                                <li><a href="elements-pagination.html">Pagination</a></li>
                                <li><a href="elements-progress.html">Progress Bar</a></li>
                                <li><a href="elements-spinners.html">Spinners</a></li>
                                <li><a href="elements-tabs.html">Tabs</a></li>
                                <li><a href="elements-tooltip.html">Tooltip</a></li>
                                <li><a href="elements-popovers.html">Popovers</a></li>
                                <li><a href="elements-typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="disc" class="nav-icon"></i>Forms<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="form-basic.html">Basic Form</a></li>
                                <li><a href="form-advance.html">Advance Form</a></li>
                                <li><a href="form-editors.html">Editors</a></li>
                                <li><a href="form-wizard.html">Wizard</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="columns" class="nav-icon"></i>Tables<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="table-basic.html">Basic Table</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="bar-chart-2" class="nav-icon"></i>Charts<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="chart-apexchart.html"><span>Apexchart</span></a></li>
                                <li><a href="chart-chartjs.html"><span>ChartJs</span></a></li>
                                <li><a href="chart-morris.html"><span>Morris  Chart</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="grid" class="nav-icon"></i>Icons<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="icons-cryptocurrency.html">Cryptocurrency</a></li>
                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                <li><a href="icons-feather.html">Feather</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#"><i data-feather="map" class="nav-icon"></i>Maps<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="map-google.html"><span>Google Map</span></a></li>
                                <li><a href="map-vector.html"><span>Vector Map</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- SideNav Inner End -->
        </div>
        <!-- SideNav Section End -->


        <!-- Content Body Start -->
        <div class="content-body">
            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-4">
                <!-- Page Heading Start -->
                <div class="col-md-auto col-12 mb-2">
                    <h3 class="mb-0">Editors</h3>
                </div>
                <!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-md-auto col-12 mb-2">
                    <span>Date: 17.06.2020 6.17am</span>
                </div>
                <!-- Page Button Group End -->
            </div>
            <!-- Page Headings End -->

            <div class="row mb-n6">
                <!--Quill Start-->
                <div class="col-12 mb-6">
                    <div class="card">
                        <div class="card-head border-bottom">
                            <h4 class="title">Quill</h4>
                        </div>
                        <div class="card-body">
                            <p>For more Information please follow the <a class="text-primary" href="https://quilljs.com/">Official Documentation</a></p>
                            <div class="quill">
                                <div class="quill-editor">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p><br /></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Quill End-->

                <!--TinyMCE Start-->
                <div class="col-12 mb-6">
                    <div class="card">
                        <div class="card-head border-bottom">
                            <h4 class="title">TinyMCE</h4>
                        </div>
                        <div class="card-body">
                            <p>For more Information please follow the <a class="text-primary" href="https://www.tiny.cloud/docs/">Official Documentation</a></p>
                            <textarea class="tinymce">Next, use our Get Started docs to setup Tiny!</textarea>
                        </div>
                    </div>
                </div>
                <!--TinyMCE End-->
            </div>
        </div>
        <!-- Content Body End -->

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

    <!-- Plugins & Activation JS For Only This Page -->

    <!-- Quill Script -->
    <script src="{{asset('admin/assets/js/plugins/quill.min.js')}}"></script>
    <script>
        var quill = new Quill(".quill-editor", {
            theme: "snow",
        });
    </script>
    <!-- Quill Script -->
    <script src="{{asset('admin/assets/js/plugins/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: ".tinymce",
            height: 300
        });
    </script>

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
</body>

</html>