
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>{{$member->title}}</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Become a Guide</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    
    
    <div class="tour-details-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                   
                    <div class="">
                        <div class="single-gallery-img mb--30">
                            <a href="{{asset('assets/images/tour-place/'.$member->image)}}" data-fancybox="gallery=images">
                                <img src="{{asset('assets/images/tour-place/'.$member->image)}}" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="tour-title mt-5">
                        <h4> {{$member->title}}</h4>
                    </div>
                    <div class="tour-details">
                        {!!$member->details!!}
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="map">

                        <style>
                            .googleMap-1 {
                                height: 400px;
                            }

                            @media only screen and (max-width: 767px) {
                                .googleMap-1 {
                                    height: 300px;
                                }
                            }
                        </style>
                        @if(!is_null($member->map_link))
                            @if(str_contains($member->map_link, ','))
                            @php
                                $string_to_array = explode(',', $member->map_link);
                            @endphp
                            <div class="google-map">
                                <div class="embed-responsive-item googleMap-1" data-lat="{{$string_to_array[0]}}" data-Long="{{$string_to_array[1]}}"></div>
                            </div>
                            @endif
                        @endif
                        




                    </div>
                    <div class="widget about-guide">
                        <h4 class="mb-3 font-weight-bold text-center">
                            <span class="tblGreen ">Meet Your Guide</span>
                        </h4>


                        <div class="guide-list-this-package">



                            <!-- Single list this package Start -->
                            @php
                            use App\Models\User;
                            $users = User::where('id', $member->guide_id)->get();
                            @endphp

                            @foreach($users as $user)
                           
                            
                            <div class="single-list-this-package mb-5">
                                <div class="guide-blurb">
                                    <div class="guide-profile-block">
                                        
                                        <div class="guide-image-box avatar-holder ">
                                            <a href="#" ><img alt="Private tour guide Obaidul" class="lazy"
                                            @if(!is_null($user->image))
                                            src="{{asset('assets/images/user/'.$user->image)}}"
                                            @else
                                            src="{{asset('assets/images/user/default-profile-picture.png')}}"
                                            @endif
                                            ></a>
                                        </div>
                                        <div class="guide-meta text-left">
                                            <strong class="guide-name">
                                                <h6><a href="#" class="font-width-bold">
                                                        {{$user->name}}

                                                </a></h6>
                                            </strong>
                                            <div class="guide-addres">
                                                {{$user->location}}, {{$user->country}}
                                            </div>
                                           <!--  <div class="rating-holder orange">
                                                <a class="fancybox" href="#">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                    

                                @if(!empty($user->credentials))
                                <p>
                                
                                 {{ substr(strip_tags($user->credentials), 0, 100) }}
                                {{ strlen(strip_tags($user->credentials)) > 100 ? "..." : "" }}</p>
                          
                                @endif

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
                        <div class="button-box mt-3">
                            <a href="/single-guide-details/{{$user->id}}">More info</a>
                        </div>
                                
                               


                            



                                   
                                </div>
                               <!--  <div class="buttons-box text-left">
                                    <a class="button" href="#">Tour with Jowel</a>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Tour with Jowel
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                            
                             @endforeach
                            <!-- Single list this package End -->





                            
                        </div>


   
                 
                        <h4 class="paddingTen mt-5 pb-2 text-center font-width-bold">
                            <h5 class="orangeDisc font-weight-bold text-center">Book this tour</h5>
                            <div class="text-center">
                                <a class="button"  href="/multi-page-form/{{$member->id}}">Book Now</a>
                                
                            </div>
                        </h4>
                        
                        
                        <div class="tour-currency-holder">
                            <!--<div class="tour-currency-price">
                                <b>Tour Price</b>
                                <p>
                                    <select class="tourDetailsPopupStyle" name="47.112.1">
                                        <option value="0">1040 USD for 4 people</option>
                                        <option value="1">855 USD for 3 people</option>
                                        <option value="2">670 USD for 2 people</option>
                                        <option selected="selected" value="3">485 USD for 1 person</option>
                                    </select>
                                    
                                    <span> <a href="#">View pricing details</a></span>
                                 </p>


                            </div>-->
                            
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
 
@section('customscript')

    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script> -->


    <script>

    
/*--
Google Map
-----------------------------------*/

// Google Map For Single Property Map
$('.googleMap-1').each(function(i) {

if ($(this).length) {
    var $this = $(this);
    var $lat = $this.data('lat');
    var $long = $this.data('long');

    function initialize() {
        var mapOptions = {
            zoom: 18,
            scrollwheel: false,
            center: new google.maps.LatLng($lat, $long),
            
        };
        var mapDoms = document.getElementsByClassName('googleMap-1');
        var mapImage = "{{asset('assets/images/icon/map-icon.png')}}";
        var map = new google.maps.Map(mapDoms[i], mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            icon: mapImage,
            map: map,
            overlay: {
                values: [{
                    address: "40.7590615,-73.969231",
                    position: 'center',
                    options: {
                        content: '',
                    }
                }, ],
                events: {
                    mouseover: function(overlay, event, context) {
                        var target = overlay.getDOMElement();

                        target.style.zIndex = 2;

                        var info = $(target).find('.gmap-info-wrapper');
                        info.find('.gmap-info-template').show();
                    },
                    mouseout: function(overlay) {
                        var target = overlay.getDOMElement();

                        target.style.zIndex = 1;

                        var info = $(target).find('.gmap-info-wrapper');
                        info.find('.gmap-info-template').hide();
                    }
                }
            },
        });
    };
    google.maps.event.addDomListener(window, 'load', initialize);
}
});



    

</script>
@endsection