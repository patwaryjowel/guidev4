  
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Private Tour Guide</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Guide Booking</li>
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
                      


                        <form id="msform" method="get" action="{{route('front.multipageformstore')}}">
                        @csrf
                            <input type="hidden" value="{{$member->id}}" name="tour_id">
                            <input type="hidden" value="" name="total_amount" id="total_amount">

                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active">Tour Date</li>
                                <li>Time & Meeting Location</li>
                                <li>Your Details</li>
                               <!--  <li>Tour Details</li>
                                <li>Payment Details</li> -->
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <br>
                                <h2 class="fs-title">Tour Date</h2>
                                <br>
                                
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
                                        <br>
                                        <h5 class="font-weight-bold pb-2">TOUR PRICE</h5>
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
                                                <select class="input-box date-select" name="start_time" id="select" require>
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
                                                <option  selected="selected" value="">Select...</option>
                                                <option value="1">Address or Intersection</option>
                                                <option value="2">Airport</option>
                                                <option value="3">Hotel</option>
                                                <option value="4">Cruise Ship Port</option>
                                                <!-- <option value="5">Hotel</option> -->
                                                <option value="6">Monument/Building</option>
                                            </select>
                                        </div>

                                        <div class="daskl mt-5">
                                        
                                            <!-- <div id="default_select" class="selector-domo-one d-none"> -->
                                            
                                            <div id="1" class="selector-domo-one d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label>Address/Intersection*</label>
                                                <input name="address_one" type="text" placeholder="">
                                                <br>
                                                <label  for="">Google Map Link</label>
                                                <input name="map_link_one" type="text" placeholder="">
                                            </div>
                                            <div  id="2" class="selector-domo-two d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label>Airport*</label>
                                                <input type="text" name="airport_two" placeholder="">
                                                <br>
                                                <label for="">Flight#*</label>
                                                <input type="text" name="flight_two" placeholder="">
                                                <br>
                                                <label for="">Arrival Time</label>
                                                <input type="text" name="arrival_time_two" placeholder="">
                                            </div>
                                            <div id="3" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label>Hotel*</label>
                                                <input type="text" name="hotel_three" placeholder="">
                                                <br>
                                                <label for="">Name Booked under*</label>
                                                <input type="text" name="name_booked_three" placeholder="">
                                                <br>
                                                <label for="">Hotel Address</label>
                                                <input type="text" name="hotel_address_three" placeholder="">
                                            </div>
                                            <div id="4" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label for="">Ship Name</label>
                                                <input type="text" name="address_four_one" placeholder="">
                                                <br>
                                                <label for="">Ship Address</label>
                                                <input type="text" name="address_four_two" placeholder="">
                                            </div>
                                            <!-- <div id="5" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label for="">Ship Name</label>
                                                <input type="text" name="address_five_one" placeholder="ddddd">
                                                <label for="">Ship Name</label>
                                                <input type="text" name="address_five_two" placeholder="dddddd">
                                            </div> -->
                                            <div id="6" class="selector-domo-three d-none">
                                                <h5>Please have your address information ready.</h5>
                                                <br>
                                                <label for="">Area Name</label>
                                                <input type="text" name="address_six_one" placeholder="">
                                                <br>
                                                <label for="">House Number, Block Name, Road Number</label>
                                                <input type="text" name="address_six_two" placeholder="">
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
                                <input type="submit" name="submit" class="action-button" value="Submit"/>
                                    
                                @endguest
                            </fieldset> 
                            <fieldset>
                                <br>
                                    <h4 class="bold">"Welcome"click submit button to confirm booking.</h4>
                                <br>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                       <input type="submit" name="submit" class="action-button" value="Submit"/>
                            </fieldset>
                              <input type="hidden" name="tour_details_to" value="tour details">
                              <input type="hidden" name="tour_details_from" value="tour_details_from">
                            <!-- <fieldset>
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
                            </fieldset> -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.MultiStep Form -->
           
        </div>
    </div>
    




