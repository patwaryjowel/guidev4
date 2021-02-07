
    
    <div class="place-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="place-br-wrap">
                        <div class="single-gallery-img mb--30">
                            <img src="{{asset('assets/images/location/'.$location->image)}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">{{$location->heading}}</h4>
                            <p>{{$location->subheading}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    @php
    use App\Models\User;
     $users_count = User::where('utype', 'guide')->where('location_id', $location->id)->where('status', 1)->count();

       $usercount = User::where('utype', 'guide')->where('location_id', $location->id)->where('status', 1)->count();
    @endphp
    <div class="tour-details-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                   
                    <div class="row clearfix masonry-wrap">
                        @foreach($tours as $tour)
                            <div class="col-lg-6 col-md-6 masonary-item">
                                <article class="single-tour-place">
                                    <div class="image-thumb"> 
                                        <a class="featured_image" href="/single-tour-details/{{$tour->id}}" title="Curzon Hall">
                                        <img src="{{asset('images/tour-place/ahsan-Manjil-Dhaka.jpg')}}" alt="">
                                        </a>
                                        <div class="location">
                                            <i class="fa fa-map-marker"></i><a href="#" rel="category tag">{{$tour->title}}</a>
                                        </div>
                                    </div>
                                    <div class="tour-small-info">
                                        <h4 class="title-post"><a href="/single-tour-details/{{$tour->id}}" rel="bookmark">{{$tour->title}}</a></h4>
                                        
                                        <p>
                                            {{ substr(strip_tags($tour->details), 0, 200) }}
                                            {{ strlen(strip_tags($tour->details)) > 200 ? "..." : "" }}
                                        </p>
                                        <a class="read-more" href="/single-tour-details/{{$tour->id}}">{{ strlen(strip_tags($tour->details)) > 200 ? "Read More" : "" }}</a>
                                    
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>

                </div>
                
                <div class="col-lg-4">
                    
                    
                    <div class="widget about-guide">
                        <div class="section-title text-center mb-4">
                            <h4 class="mb-0 font-weight-bold"><span class="tblGreen ">Local Guides In {{$location->location}}</span> </h4>
                             <p class="mb-0">There are {{$usercount}} local Guides</p> 
                        </div>


                        <div class="guide-list-this-package mb-30">

                            <!-- Single list this package Start -->
                           @php
                           
                           
                            $users = User::where('utype', 'guide')->where('location_id', $location->id)->where('status', 1)->get();

                          
                             @endphp

  
                              @foreach($users as $user)
                              

                           



                            <div class="single-list-this-package mb-3">
                                <div class="guide-blurb">
                                    <div class="guide-profile-block">
                                        
                                        <div class="guide-image-box avatar-holder ">
                                            <a href="#" ><img alt="Private tour guide Obaidul" class="lazy" src="{{asset('assets/images/user/'.$user->image)}}"></a>
                                        </div>
                                        <div class="guide-meta text-left">
                                            <strong class="guide-name">
                                                <h6><a href="/single-guide-details/{{$user->id}}" class="font-width-bold">{{$user->name}} </a></h6>
                                            </strong>
                                            <div class="guide-addres">
                                                {{$user->city}}, {{$user->country}}
                                            </div>
                                            <div class="rating-holder orange">
                                                <a class="fancybox" href="#">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                            @endforeach
                            <!-- Single list this package End -->
                           

                         



                            <div class="more-guides text-center">
                                <a href="{{route('front.forguide')}}" class="button">Meet Our Guides</a>
                            </div>


                            <div class="tour-place-side-short-details">
                                <div class="title text-center">
                                    <h5 class="font-weight-bold">{{$location->title}}</h5>
                                </div>

                                {!!$location->details!!}
                               
                            </div>
                        </div>

                        
                        <div class="social-share mt-5 pb-5 text-center font-width-bold">
                            <h6 class="font-weight-bold">Social Share </h6>
                           <ul class="social-ul">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
   