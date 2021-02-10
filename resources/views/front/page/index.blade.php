    <!-- slider-main-area start -->
    <div class="slider-main-area">
        <div class="slider-active owl-carousel">
            <!-- slider-wrapper start -->
            @foreach($sliders as $slider)
            <div class="slider-wrapper bg-overlay" style="background-image:url({{ asset('assets/images/gallery/'.$slider->image) }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 ml-auto mr-auto">
                            <div class="hero-text-content">
                                <h1 class="text-white">{{$slider->title}} </h1>
                                <div class="slider-button-box">
                                    <a title="Tour now" href="{{route('front.fortour')}}" class="slier-btn">Tour Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- slider-wrapper end -->
        </div>
    </div>
    <!-- slider-main-area end -->
            
    
    
    
    <!-- Tour Place Area Start -->
    <div class="tour-place-area masonry-activation section-ptb">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-5">
                        <h4>Tours Place</h4>
                        <h3>Our City Tours</h3>
                    </div>
                </div>
            </div>

            <div class="row clearfix masonry-wrap">
                
               
                @foreach($tours as $tour)
                <div class="col-lg-4 col-md-6 masonary-item">
                    <article class="single-tour-place">
                        <div class="image-thumb"> 
                            <a class="featured_image" href="./single-tour-details/{{$tour->id}}" title="{{ $tour->title }}">
                              <img src="{{asset('assets/images/tour-place/'.$tour->image)}}" alt="{{ $tour->title }}">
                            </a>
                            <div class="location">
                                <i class="fa fa-map-marker"></i><a href="./single-tour-details/{{$tour->id}}" rel="category tag">{{ $tour->title }}</a>
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="all-item-show-button-box text-center mt-5">
                        <a href="{{route('front.fortour')}}" class="button">
                            See ALL Tour Place
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Tour Place Area End  -->


    <!-- Tour Place Area Start -->
    <div class="tour-place-area section-pb">
        <div class="container-fluid pl-0 pr-0">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-5">
                        <h3>Most popular place</h3>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-3">
                    <a class="single-item-most-popular-place">
                        <img src="assets/images/gallery/private-guided-experiences-1608106323.jpg" alt="">
                        <div class="heading">
                            <h4>Most popular place in Dhaka </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="single-item-most-popular-place">
                        <img src="assets/images/gallery/private-guided-experiences-1608106323.jpg" alt="">
                        <div class="heading">
                            <h4>Most popular place in </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="single-item-most-popular-place">
                        <img src="assets/images/gallery/private-guided-experiences-1608106323.jpg" alt="">
                        <div class="heading">
                            <h4>Most popular place in</h4>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3">
                    <a class="single-item-most-popular-place">
                        <img src="assets/images/gallery/private-guided-experiences-1608106323.jpg" alt="">
                        <div class="heading">
                            <h4>Most popular place in</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Place Area End  -->


    
    <!-- Testimonials Area -->
    <div class="testimonials-area grey-bg-image_2 section-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  ml-auto mr-auto">
                    <!-- section-title -->
                    <div class="section-title-two text-center">
                        <h4>Testimonials</h4>
                        <h3>Our happy clients</h3>
                    </div><!--// section-title -->
                </div>
            </div>
           
            <div class="row">
                <div class="testimonial-slider-2 owl-carousel">
                @php 
                use Illuminate\Support\Facades\DB;
                use Illuminate\Database\Eloquent\Model;
                $testimonials = DB::table('testimonials')->orderBy('id','desc')->paginate(10);
                @endphp

                @foreach($testimonials as $testimonial)
                    <div class="col-12">
                        <div class="single-testimonial testimonial-style-2">
                            <div class="des-testimonial">
                                <p> {{ $testimonial->detail }}</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="{{asset('assets/images/testimonial/'.$testimonial->image)}}" alt="{{ $testimonial->name }}">
                                </div>
                                <div class="author-content">
                                    <h5>{{ $testimonial->name }} </h5>
                                    <p>{{ $testimonial->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--// Testimonials Area -->