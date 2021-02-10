  
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Old Dhaka Private Tour</h3>
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
    
    
    
    
    <div class="tour-details-area grey-light section-ptb">
        <div class="container">
           
           

  @if ($message = Session::get('success'))

                    <div class="alert alert-success alert-block mt-3">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>

                  @endif

                  @if (count($errors) > 0)

                        <ul class="alert alert-danger pl-5">

                          @foreach($errors->all() as $error)

                             <li>{{ $error }}</li> 

                          @endforeach

                        </ul>

                @endif

         




               
                               




            <!-- MultiStep Form -->
            <div class="multiStep-area">
                <div class="row">
                    <div class="col-md-9 ml-auto mr-auto">
                      


                        	 <form id="msform" method="post" action="{{route('front.multipageformstore')}}"  enctype="multipart/form-data">
                                        @csrf

                            <input type="hidden" value="{{$member->id}}" name="tour_id">
                            <input type="hidden" value="" name="total_amount" id="total_amount">

                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active">Tour Date</li>
                                <li>Time & Meeting Location</li>
                                <li>Your Details</li>
                                <li>Tour Details</li>
                                <li>Payment Details</li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <h2 class="fs-title">Tour Date</h2>
                                
                                <div class="single-row">
                                    
                                    <div id="calendar"></div>

                                   <br>


                                  


                                 
                                    @php
                            use App\Models\User;
                            $users = User::where('id', $member->guide_id)->get();
                            @endphp

                            @foreach($users as $user)
                            <input type="text"  class="d-none" name="guide_user_id" value="{{$user->id}}">
                            @endforeach
                  








                                <input type="hidden" value="" name="selected_dates" id="selected_dates"/>


<div class="box">
                                <div class="title text-center mb-2">
                                    <h5 class="font-weight-bold">TOUR PRICE</h5>
                                </div>
                                <select name="tour_price" class="mb-5 book-select-box" id="tour_price">
                                    @if(!is_null($member->people))
                                        @php
                                        $peoples = explode(',', $member->people);
                                        $prices = explode(',', $member->price);
                                        $i = 0;
                                        @endphp

                                        @foreach($peoples as $people)
                                        <option  value="${{$prices[$i]}}USD for {{$people}} people">${{$prices[$i]}} USD for {{$people}} people</option>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                    @endif
                                </select>
                            </div>




                                </div>
                                <input type="button" name="next" class="next action-button" value="Next"/>

                            </fieldset>
                            <fieldset>

                                <div class="form-resived-select-area">
                                    <h2 class="fs-title">Meeting Information</h2>
                                    
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <div class="single-row mb-3">
                                                <label>START TIME</label>
                                                <select class="input-box date-select" name="start_time" id="select">
                                                    <option  selected="selected" value="">Select...</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:30">10:30</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    

                                    <div class="main_Div mb-3">
                                        <div class="single-row">
                                        <label>MEETING LOCATION</label>
                                            <select class="input-box  recevice-select" name="metting_location" id="select">
                                                <option  selected="selected" value="default_select">Select...</option>
                                                <option value="one">Address or Intersection</option>
                                                <option value="two">Airport</option>
                                                <option value="three">Ask Guide to suggest a location</option>
                                                <option value="four">Cruise Ship Port</option>
                                                <option value="five">Hotel</option>
                                                <option value="six">Monument/Building</option>
                                            </select>
                                        </div>

                                        <div class="daskl mt-5">
                                        
                                            <!-- <div id="default_select" class="selector-domo-one d-none">
                                            </div> -->
                                            <div id="one" class="selector-domo-one d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label>ADDRESS/INTERSECTION*</label>
                                                <input name="address_one" type="text" placeholder="">
                                                <br>
                                                <label  for="">GOOGLE MAP LINK</label>
                                                <input name="map_link_one" type="text" placeholder="">
                                            </div>
                                            <div  id="two" class="selector-domo-two d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label>AIRPORT*</label>
                                                <input type="text" name="airport_two" placeholder="">
                                                <br>
                                                <label for="">FLIGHT #*</label>
                                                <input type="text" name="flight_two" placeholder="">
                                                <br>
                                                <label for="">ARRIVAL TIME</label>
                                                <input type="text" name="arrival_time_two" placeholder="">
                                            </div>
                                            <div id="three" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label>HOTEL*</label>
                                                <input type="text" name="hotel_three" placeholder="">
                                                <br>
                                                <label for="">NAME BOOKED UNDER</label>
                                                <input type="text" name="name_booked_three" placeholder="">
                                                <br>
                                                <label for="">HOTEL ADDRESS</label>
                                                <input type="text" name="hotel_address_three" placeholder="">
                                            </div>
                                            <div id="four" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <input type="text" name="address_four_one" placeholder="ddddd">
                                                <input type="text" name="address_four_two" placeholder="dddddd">
                                            </div>
                                            <div id="five" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <input type="text" name="address_five_one" placeholder="ddddd">
                                                <input type="text" name="address_five_two" placeholder="dddddd">
                                            </div>
                                            <div id="six" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <input type="text" name="address_six_one" placeholder="ddddd">
                                                <input type="text" name="address_six_two" placeholder="dddddd">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                            </fieldset>
                            <fieldset id="authentiaction_form">
                                <div class="guide-traveler-login-box">


                                      <!-- Authentication Links -->
                       @guest
                      @include('front.page.part.your-detail')
                          
                        @else
                                <div class="login-welcome-box">
                                   Welcome {{ Auth::User()->name }} click next button to continue.
                                </div>

                                     <input type="text" value="{{ Auth::User()->id }}" name="user_id" style="display: none;" placeholder="From"/>
                                     </div>
                                       <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                                    
                        @endguest
                                    
                              
                            </fieldset> 

                              
                            <fieldset>
                                <h2 class="fs-title">TOUR DETAILS</h2>
                                <br>
                                <label>From*</label>
                                <input type="text" name="tour_details_from" placeholder="From"/>
                                <br>
                                <label>To*</label>
                                <input type="text" name="tour_details_to" placeholder="To"/>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                            </fieldset>
                            <fieldset>
                                <h2 class="fs-title">Create your account</h2>
                                <h3 class="fs-subtitle">Fill in your credentials</h3>
                                <input type="text" name="kkkemail" placeholder="Email"/>
                                <input type="password" name="pass" placeholder="Password"/>
                                <input type="password" name="cpass" placeholder="Confirm Password"/>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="submit" name="submit" class="action-button" value="Submit"/>
                            </fieldset>



                        </form>
                    </div>
                </div>
            </div>
            <!-- /.MultiStep Form -->
           
           
           
            
        </div>
    </div>
    

@section('paymentscript')
<script>

function pricecalculation() {
var str = $('#tour_price :selected').val();
var price = str.slice(1, str.indexOf("USD"));
console.log('Amount'+price);

$('#total_amount').val(price);
}
pricecalculation();

$('#tour_price').click(function() {
    pricecalculation();
});
</script>

@endsection


