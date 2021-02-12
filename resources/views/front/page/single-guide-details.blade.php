
    
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Become a Guide</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Tours with {{$user->name}}</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    
    
    <div class="tourist-guide-apply-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                    <div class="all-guide-wrapper">

                        <div class="single-guide-wrap">
                            <div class="guide-header-box">
                                <div class="guide-img">
                                    <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
                                </div>
                                <div class="guide-hero-info">
                                    <h4>
                                        <a href="#">{{$user->name}} </a>
                                    </h4>
                                    <span>{{$user->city}}, {{$user->country}}</span>

                                    <div class="guide-rating">
                                       <!--  <b>Rating</b> -->
                                    </div>
                                </div>

                            </div>

                            <div class="card-box">
                                <p><b>Languages:</b>
                                @if(!empty($user->bangla))
                                Bengali ({{$user->bangla}}),
                                @endif

                                @if(!empty($user->english))
                                English ({{$user->english}}),
                                @endif

                                @if(!empty($user->arabic))
                                Arabic ({{$user->arabic}}),
                                @endif

                                @if(!empty($user->hindi))
                                Hindi ({{$user->hindi}}).
                                @endif


                            </p>


                                <p><b>Biography:</b> {{$user->biography}}</p>

                                <b>Credentials:</b> {!!$user->credentials!!}
                                </div>
                        </div>
                    </div>
                
                </div>
                
                <div class="col-lg-4">
                    <div class="single-guide-wrap">
                        <div class="skell-guide-wrap">
                            <h4 class="text-center font-weight-bold">GUIDE DETAILS</h4>
                        </div>

                        <div class="live">
                            <b>LIVES IN</b>
                            <p> {{$user->city}},  {{$user->country}}</p>
                        </div>
                        
                        <ul class="tour-language-list bar-chart-lists">
                            @if(!empty($user->bangla))
                                 <li>
                                <b class="language"><small>Bangla</small></b>
                                <div data-level="2" class="bar-chart-level"><span></span><span></span><span></span><span></span><b><small>{{$user->bangla}}</small></b></div>
                            </li>
                            @endif

                             @if(!empty($user->english))
                                 <li>
                                <b class="language"><small>English</small></b>
                                    <div data-level="2" class="bar-chart-level"><span></span><span></span><span></span><span></span><b><small>{{$user->english}}</small></b></div>
                                </li>
                            @endif

                             @if(!empty($user->arabic))
                                 <li>
                                <b class="language"><small>Arabic</small></b>
                                <div data-level="2" class="bar-chart-level"><span></span><span></span><span></span><span></span><b><small>{{$user->arabic}}</small></b></div>
                            </li>
                            @endif

                             @if(!empty($user->hindi))
                                 <li>
                                <b class="language"><small>Hindi</small></b>
                                <div data-level="2" class="bar-chart-level"><span></span><span></span><span></span><span></span><b><small>{{$user->hindi}}</small></b></div>
                            </li>
                            @endif
                        </ul>
                        
                        
                        <div class="guide-id text-center mt-5">
                            <h4 class="font-weight-bold ">GUIDE NUMBER</h4>
                            <b>#0016{{$user->guidenumber}}</b>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    
    
  