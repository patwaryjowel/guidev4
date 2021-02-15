<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || BD Guide Tour </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- Modernizer JS -->
    <script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>

    <style type="text/css">
  
        .displaynone{
        display: none;
        }
        .show {
        display: flex;
        }
        .hide {
        display: none;
        }
    </style> 
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
   
    <header class="header-area">
        
        <div class="header-bottom-area header-sticky header-sticky">
            <div class="container">
                <div class="row row align-items-center">
                   
                    <div class="col-lg-3 col-md-5 col-6">
                        
                        <!-- logo-area -->
                        <div class="logo-area">
                            <a href="{{route('front.index')}}"><img src="{{asset('images/logo/logo.png')}}" alt=""></a>
                        </div><!--// logo-area -->
                        
                    </div>
                    <div class="col-lg-9 col-md-7 col-6">
                        <div class="header-bottom-right">
                            <!-- main-menu -->
                            <div class="main-menu">
                                <nav class="main-navigation">
                                    <ul>
                                        <li class="active"><a href="{{route('front.index')}}">Home</a></li>
                                        <li><a href="{{route('front.forguide')}}">Our Guids</a></li>
                                        <li><a href="{{route('front.fortour')}}">Tour Place</a>
                                            <ul class="sub-menu">
                                                @php
                                                use App\Models\location;
                                                $locations = location::all();
                                                @endphp
                                                @foreach($locations as $location)
                                                <li><a href="/tour-place/{{$location->id}}">Tour Place {{$location->location}}</a></li>

                                                @endforeach
                                            </ul>
                                        </li>
                                        @guest
                                        <li><a href="#">Login</a>
                                            <ul class="sub-menu">
                                                    <li><a href="{{route('front.adminlogin')}}">Admin Login </a></li>
                                                <li><a href="{{route('front.guidelogin')}}">Guide Login </a>
                                                <li><a href="{{route('front.travelerlogin')}}">Traveler Login </a></li>
                                            </ul>
                                        </li>
                                        @else
                                            @if(Auth::check())
                                                @if(Auth::User()->utype == "admin")                
                                                    <li>
                                                        <a class="nav-link" href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                                                    </li>
                                                @elseif(Auth::User()->utype == "guide")
                                                    <li>
                                                        <a class="nav-link" href="{{ route('guide.dashboard') }}">{{ __('Dashboard') }}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endguest
                                    </ul>
                                </nav>
                            </div><!--// main-menu -->
                        </div>
                    </div>
                    
                     <div class="col">
                        <!-- mobile-menu start -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                        <!-- mobile-menu end -->
                    </div>
                    
                </div>
            </div>
        </div>
        
    </header>
    
    
@yield('content')
    
    <!-- Footer Area -->
    <footer class="footer-area">
        <!-- Footer Top Area -->
        <div class="footer-top section-pb section-pt-60">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mt--60">
                        <div class="footer-single-block">    
                            <div class="footer-logo">
                                <a href="{{route('front.index')}}"><img src="{{asset('images/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6  mt--60">
                        <div class="footer-block">
                            <h5>FOLLOW US</h5>
                            <ul class="footer-list">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt--60">
                        <div class="footer-block">
                            <h5>COMPANY</h5>
                            <ul class="footer-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 mt--60">
                        <div class="footer-block">
                            <h5>SUPPORT</h5>
                            <ul class="footer-list">
                                <li><a href="#">Help</a></li>
                                <li><a href="#">How it works</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--// Footer Top Area -->
        
        <!-- Footer-bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right pt-30 pb-30 text-center text-white">
                            <p>&copy; 2021 <a href="#">Tour Guide BD. </a> Designed By Jowel & Murad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// Footer-botton Area -->
        
    </footer>
    <!--// Footer Area -->
    
</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
<!-- js cookie -->
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<!-- Popper JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- jquery ui Js -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>
@yield('customscript')
@yield('paymentscript')
@yield('loginformscript')
@yield('signupformscript')

<script>
 $('#msform input').keydown(function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});
</script>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
</body>

</html>