@php
use App\Models\User;
use App\Models\Tour;
$uid = $booking->user_id;
$gid = $booking->guide_user_id;
$user = User::where('id', $uid)->get();
$guide = User::where('id', $gid)->get();
$tour = Tour::find($booking->tour_id);
@endphp


<!-- Content Body Start -->
        <div class="content-body">
         

            <div class="row">
               

                <!--Tab With Icon Start-->
                <div class="col-12 mb-6">
                    <div class="card">
                        <div class="card-head border-bottom">
                            <h4 class="title"></h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#order"><i class="fa fa-envelope mr-1"></i>Order Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#user"><i class="fa fa-user mr-1"></i> User Info</a>
                                </li>
                       
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#guide"><i class="fa fa-user mr-1"></i> Guide Info</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="order">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card-body">
                                                <div class="card-head border-bottom  pl-0">
                                                    <h4 class="title">Basic Info</h4>
                                                </div>
                                                <table class="table table-bordered mt-5">

                                                    
                                                    <tr><td>User Name & Id</td>
                                                        <td>
                                                        @foreach($user as $basic)
                                                            {{$basic->name}}
                                                        @endforeach
                                                        ({{$booking->user_id}})
                                                    </td> </tr>

                                                    <tr>
                                                        <td>Place Info</td>
                                                        <td>
                                                            <img src="{{asset('assets/images/tour-place/'.$tour->image)}}" class="img-fluid tour-place_image" alt="">
                                                            <h5 class="mt-2">{{$tour->title}}</h5>
                                                            <style>
                                                                .tour-place_image{
                                                                    width: 200px;
                                                                }
                                                            </style>
                                                        </td> 
                                                    </tr>
                                                    <tr><td>Start Time</td><td>{{$booking->start_time}}</td> </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body">
                                                <div class="card-head border-bottom pl-0">
                                                    <h4 class="title">Guide Booking date</h4>
                                                </div>
                                                <table class="table table-bordered  mt-5">
                                                    <tr><td>Guide Booking date</td><td>{{$booking->tour_date_one}}</td> </tr>
                                                    <tr>
                                                        <td>Guide User Name & Id</td><td> 
                                                        @foreach($guide as $basic)
                                                            {{$basic->name}}
                                                        @endforeach
                                                        ({{$booking->guide_user_id}})
                                                        </td> 
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body">
                                                <div class="card-head border-bottom  pl-0">
                                                    <h4 class="title">Meeting Information </h4>
                                                </div>
                                                <table class="table table-bordered  mt-5">
                                                    <tr><td>Metting Location</td>
                                                <td>                                                

                                                    @php
                                                    $x = $booking->metting_location;
                                                    @endphp

                                                    @if( $x == 1)
                                                        Address or Intersection
                                                    @elseif( $x == 2)
                                                        Airport
                                                    @elseif( $x == 3)
                                                        Ask Guide to suggest a location
                                                    @elseif( $x == 4)
                                                        Cruise Ship Port
                                                    @elseif( $x == 5)
                                                        Hotel
                                                    @elseif( $x == 6)
                                                        Monument/Building
                                                    @else
                                                        Other
                                                    @endif

                                                    </td> 

                                                    </tr>

                                                    <tr class="@if( $x == 1)@else d-none @endif"><td>Address / Intersection</td><td>{{$booking->address_one}}</td> 
                                                    </tr>
                                                    <tr class="@if( $x == 1)@else d-none @endif"><td>Google Map Link</td><td>{{$booking->map_link_one}}</td> </tr>

                                                    <tr class="@if( $x == 2)@else d-none @endif"><td>Airport Name</td><td>{{$booking->airport_two}}</td> </tr>
                                                    <tr class="@if( $x == 2)@else d-none @endif"><td>Flight Number</td><td>{{$booking->flight_two}}</td> </tr>
                                                    <tr class="@if( $x == 2)@else d-none @endif"><td>Arrival Time</td><td>{{$booking->arrival_time_two}}</td> </tr>

                                                    <tr class="@if( $x == 3)@else d-none @endif"><td>Hotel</td><td>{{$booking->hotel_three}}</td> </tr>
                                                    <tr class="@if( $x == 3)@else d-none @endif"><td>Name Booked under</td><td>{{$booking->name_booked_three}}</td> </tr>
                                                    <tr class="@if( $x == 3)@else d-none @endif"><td>Hotel Address</td><td>{{$booking->hotel_address_three}}</td> </tr>

                                                    <tr class="@if( $x == 4)@else d-none @endif"><td>Ship Name</td><td>{{$booking->address_four_one}}</td> </tr>
                                                    <tr class="@if( $x == 4)@else d-none @endif"><td>Ship Address</td><td>{{$booking->address_four_two}}</td> </tr>

                                                    <tr class="@if( $x == 5)@else d-none @endif"><td>address_five_one</td><td>{{$booking->address_five_one}}</td> </tr>
                                                    <tr class="@if( $x == 5)@else d-none @endif"><td>address_five_two</td><td>{{$booking->address_five_two}}</td> </tr>

                                                    <tr class="@if( $x == 6)@else d-none @endif"><td>Area Name</td><td>{{$booking->address_six_one}}</td> </tr>
                                                    <tr class="@if( $x == 6)@else d-none @endif"><td>House Number, Block Name, Road Number</td><td>{{$booking->address_six_two}}</td> </tr>

                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body">
                                                <div class="card-head border-bottom  pl-0">
                                                    <h4 class="title">Payment Status</h4>
                                                </div>
                                                <table class="table table-bordered  mt-5">
                                                    <tr><td>Packge:</td><td>{{$booking->tour_price}}</td> </tr>
                                                    <tr><td>Status:</td><td>@if($booking->status == 1) Approved @else Processing @endif</td> </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="user">
                                    
                                    @foreach($user as $user)                      
                                        <table class="table table-bordered">

                                            <tr><td>User Imagae</td><td>

                                            <div class="avatar-lg user-image_table">
                                                <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
                                                
                                            </div>
                                            <style>
                                                .user-image_table img{
                                                    width: 150px;
                                                    height: 150px;
                                                    border-radius: 5500px;
                                                }
                                            </style>

                                            </td>
                                            </tr>

                                            <tr><td>Prefix</td><td>{{$user->prefix}}</td> </tr>
                                            <tr><td>Name</td><td>{{$user->name}}</td> </tr>
                                            <tr><td>Email</td><td>{{$user->email}}</td> </tr>
                                            <tr><td>Utype</td><td>{{$user->utype}}</td> </tr>
                                            <tr><td>Token</td><td>{{$user->token}}</td> </tr>
                                            <tr><td>Country</td><td>{{$user->country}}</td> </tr>
                                            <tr><td>Birthday</td><td>{{$user->birthday}}</td> </tr>
                                            <tr><td>City</td><td>{{$user->city}}</td> </tr>
                                            <tr><td>Country</td><td>{{$user->country}}</td> </tr>
                                            <tr><td>Address</td><td>{{$user->address}}</td> </tr>
                                            <tr><td>ZIP</td><td>{{$user->zip}}</td> </tr>
                                            <tr><td>Homephone</td><td>{{$user->homephone}}</td> </tr>
                                            <tr><td>Cellphone</td><td>{{$user->cellphone}}</td> </tr>
                                            <tr><td>Skypename</td><td>{{$user->skypename}}</td> </tr>
                                            <tr><td>Contacttime</td><td>{{$user->contacttime}}</td> </tr>
                                            <!-- <tr><td>Licensed</td><td>{{$user->licensed}}</td> </tr>
                                            <tr><td>Licensedetail</td><td>{{$user->licensedetail}}</td> </tr> -->
                                            <tr><td>Detail</td><td>{{$user->detail}}</td> </tr>
                                            <tr><td>Notes</td><td>{{$user->notes}}</td> </tr>
                                            <tr><td>Status</td><td>{{$user->status}}</td> </tr>
                                        </table>

                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="guide">
                                    @foreach($guide as $user)
                                        <table class="table table-bordered">
                                            <tr><td>Picture</td><td>

                                            <div class="avatar-lg user-image_table">
                                                <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
                                            </div>
                                            <style>
                                                .user-image_table img{
                                                    width: 150px;
                                                    height: 150px;
                                                    border-radius: 5500px;
                                                }
                                            </style>

                                            </td> </tr>                          
                                            <tr><td>prefix</td><td>{{$user->prefix}}</td> </tr>
                                            <tr><td>name</td><td>{{$user->name}}</td> </tr>
                                            <tr><td>email</td><td>{{$user->email}}</td> </tr>
                                            <tr><td>utype</td><td>{{$user->utype}}</td> </tr>
                                            <tr><td>token</td><td>{{$user->token}}</td> </tr>
                                            <tr><td>country</td><td>{{$user->country}}</td> </tr>
                                            <tr><td>birthday</td><td>{{$user->birthday}}</td> </tr>
                                            <tr><td>city</td><td>{{$user->city}}</td> </tr>
                                            <tr><td>country</td><td>{{$user->country}}</td> </tr>
                                            <tr><td>address</td><td>{{$user->address}}</td> </tr>
                                            <tr><td>zip</td><td>{{$user->zip}}</td> </tr>
                                            <tr><td>homephone</td><td>{{$user->homephone}}</td> </tr>
                                            <tr><td>cellphone</td><td>{{$user->cellphone}}</td> </tr>
                                            <tr><td>skypename</td><td>{{$user->skypename}}</td> </tr>
                                            <tr><td>contacttime</td><td>{{$user->contacttime}}</td> </tr>
                                            <tr><td>licensed</td><td>{{$user->licensed}}</td> </tr>
                                            <tr><td>licensedetail</td><td>{{$user->licensedetail}}</td> </tr>
                                            <tr><td>detail</td><td>{{$user->detail}}</td> </tr>
                                            <tr><td>notes</td><td>{{$user->notes}}</td> </tr>
                                            <tr><td>status</td><td>{{$user->status}}</td> </tr>
                                        </table>
                                    @endforeach

                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tab With Icon End-->
            </div>
        </div>
        <!-- Content Body End -->




























