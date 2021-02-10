
    @php
    use App\Models\User;
    use App\Models\guidedetail;
    $users = User::where('utype', 'guide')->where('status', 1)->get();

    @endphp
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
                            <li class="breadcrumb-item active">For a Guide</li>
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
                <div class="col-lg-12">
                    <h3 class="text-center font-weight-bold">Local Guides</h3>
                </div>
            </div>

            <div class="row">

                @foreach($users as $user)
                 
                  
                <div class="col-lg-6">
                    <div class="single-guide-wrap">
                        <div class="guide-header-box">
                            <div class="guide-img">
                                <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
                            </div>
                            <div class="guide-hero-info">
                                <h4>
                                    <a href="/single-guide-details/{{$user->id}}">{{$user->name}}</a>

                                </h4>
                                
                                <span>{{$user->city}}, {{$user->country}}</span>
                                 
                                <div class="guide-rating">
                                   <!--  <b>Rating</b> -->
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="card-box">
                       
                            <p><b>Languages:</b>&nbsp;
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


                                @if(!empty('$user->biography'))
                                <p>
                                <b>Biography:</b>&nbsp;
                                {{$user->biography}}
                                 </p>
                                @endif

                                 @if(!empty('$user->credentials'))
                                <p>
                                <b>credentials:</b>&nbsp;
                                 {{ substr(strip_tags($user->credentials), 0, 200) }}
                                {{ strlen(strip_tags($user->credentials)) > 200 ? "..." : "" }}</p>
                            <a class="read-more" href="/single-guide-details/{{$user->id}}">{{ strlen(strip_tags($user->credentials)) > 200 ? "Read More" : "" }}</a>
                                
                                @endif
                       
                            </div>
                    </div>
                </div>
            
              @endforeach
               
            
                
            </div>
        </div>
    </div>
    
    
    
   