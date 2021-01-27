@php
use App\Models\User;
$uid = $booking->user_id;
$gid = $booking->guide_user_id;
$user = User::where('id', $uid)->get();
$guide = User::where('id', $gid)->get();
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
                                    <a class="nav-link" data-toggle="tab" href="#order"><i class="fa fa-envelope mr-1"></i>Order Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#user"><i class="fa fa-user mr-1"></i> User Info</a>
                                </li>
                       
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#guide"><i class="fa fa-user mr-1"></i> Guide Info</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="order">
                                    <table class="table table-bordered">
                                        <tr><td>Guide User Id</td><td>{{$booking->guide_user_id}}</td> </tr>
                                        <tr><td>User Id</td><td>{{$booking->user_id}}</td> </tr>
                                        <!-- <tr><td>Guide Booking date</td><td>{{$booking->tour_date_one}}</td> </tr>
                                        <tr><td>tour_date_two</td><td>{{$booking->tour_date_two}}</td> </tr>
                                        <tr><td>tour_date_three</td><td>{{$booking->tour_date_three}}</td> </tr>
                                        <tr><td>tour_date_four</td><td>{{$booking->tour_date_four}}</td> </tr>
                                        <tr><td>tour_date_five</td><td>{{$booking->tour_date_five}}</td> </tr>
                                        <tr><td>tour_date_six</td><td>{{$booking->tour_date_six}}</td> </tr>
                                        <tr><td>tour_date_seven</td><td>{{$booking->tour_date_seven}}</td> </tr>
                                        <tr><td>tour_date_eight</td><td>{{$booking->tour_date_eight}}</td> </tr>
                                        <tr><td>tour_date_nine</td><td>{{$booking->tour_date_nine}}</td> </tr>
                                        <tr><td>tour_date_ten</td><td>{{$booking->tour_date_ten}}</td> </tr> -->
                                        <tr><td>Start Time</td><td>{{$booking->start_time}}</td> </tr>
                                        <tr><td>Number Of People</td><td>{{$booking->number_of_people}}</td> </tr>
                                        <tr><td>metting_location</td><td>{{$booking->metting_location}}</td> </tr>
                                        <tr><td>address_one</td><td>{{$booking->address_one}}</td> </tr>
                                        <tr><td>map_link_one</td><td>{{$booking->map_link_one}}</td> </tr>
                                        <tr><td>airport_two</td><td>{{$booking->airport_two}}</td> </tr>
                                        <tr><td>flight_two</td><td>{{$booking->flight_two}}</td> </tr>
                                        <tr><td>arrival_time_two</td><td>{{$booking->arrival_time_two}}</td> </tr>
                                        <tr><td>hotel_three</td><td>{{$booking->hotel_three}}</td> </tr>
                                        <tr><td>name_booked_three</td><td>{{$booking->name_booked_three}}</td> </tr>
                                        <tr><td>hotel_address_three</td><td>{{$booking->hotel_address_three}}</td> </tr>
                                        <tr><td>address_four_one</td><td>{{$booking->address_four_one}}</td> </tr>
                                        <tr><td>address_four_two</td><td>{{$booking->address_four_two}}</td> </tr>
                                        <tr><td>address_five_one</td><td>{{$booking->address_five_one}}</td> </tr>
                                        <tr><td>address_five_two</td><td>{{$booking->address_five_two}}</td> </tr>
                                        <tr><td>address_six_one</td><td>{{$booking->address_six_one}}</td> </tr>
                                        <tr><td>address_six_two</td><td>{{$booking->address_six_two}}</td> </tr>
                                        <tr><td>tour_details_from</td><td>{{$booking->tour_details_from}}</td> </tr>
                                        <tr><td>tour_details_to</td><td>{{$booking->tour_details_to}}</td> </tr>
                                        <tr><td>payment_info_one</td><td>{{$booking->payment_info_one}}</td> </tr>
                                        <tr><td>payment_info_two</td><td>{{$booking->payment_info_two}}</td> </tr>
                                        <tr><td>payment_info_three</td><td>{{$booking->payment_info_three}}</td> </tr>
                                        <tr><td>status</td><td>{{$booking->status}}</td> </tr>
                                        <tr><td>payment</td><td>{{$booking->payment}}</td> </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="user">
                                    @foreach($user as $user)
                                                                                
                                        <table class="table table-bordered">

                                            <tr><td>Picture</td><td>

                                            <div class="avatar-lg">
                                                <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
                                            </div>

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
                                <div class="tab-pane fade" id="guide">
                                    @foreach($guide as $user)
                                        <table class="table table-bordered">
                                            <tr><td>Picture</td><td>

                                            <div class="avatar-lg">
                                                <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
                                            </div>

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




























