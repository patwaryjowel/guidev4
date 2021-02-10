   
@php
use App\Models\tour;
$tours = tour::all();
@endphp


    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Tours Place</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Tours Place</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tour Place Area Start -->
    <div class="tour-place-area masonry-activation section-ptb">
        <div class="container">
            <div class="row clearfix masonry-wrap">
               
               






                 @foreach($tours as $tour)
                <div class="col-lg-4 col-md-6 masonary-item">
                    <article class="single-tour-place">
                        <div class="image-thumb"> 
                            <a class="featured_image" href="./single-tour-details/{{$tour->id}}" title="{{ $tour->title }}">
                              <img src="{{asset('assets/images/tour-place/'.$tour->image)}}" alt="{{ $tour->title }}">
                            </a>
                            <div class="location">
                                <a href="{{$tour->map_link}}"><i class="fa fa-map-marker"></i></a><a href="/single-tour-details/{{$tour->id}}" rel="category tag">{{ $tour->title }}</a>
                            </div>
                        </div>
                        <div class="tour-small-info">
                            
                            <h4 class="title-post"><a href="./single-tour-details/{{$tour->id}}" rel="bookmark">{{ $tour->title }}</a></h4>
                            
                            <p>
                                {{ substr(strip_tags($tour->details), 0, 200) }}
                                {{ strlen(strip_tags($tour->details)) > 200 ? "..." : "" }}</p>
                            <a class="read-more" href="./single-tour-details/{{$tour->id}}">{{ strlen(strip_tags($tour->details)) > 200 ? "Read More" : "" }}</a>
                        </div>
                    </article>
                </div>
                 @endforeach
                
               
                
               
               
                
                
                
                


            </div>

        </div>
    </div>
    <!-- Tour Place Area End  -->

    
   