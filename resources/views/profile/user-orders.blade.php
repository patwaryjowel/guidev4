@extends('profile.master.user')
@section('content')


@php
use App\Models\User;
use App\Models\booking;
$users = User::where('id', Auth::user()->id)->get();



$bookings = booking::where('user_id', Auth::user()->id)->get();
@endphp


 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  @if(!is_null(Auth::user()->image))
                    src="{{asset('assets/images/user/'.Auth::user()->image)}}"
                    @else
                    src="{{asset('assets/images/user/default-profile-picture.png')}}"
                  @endif
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}  </h3>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>




          @php
          $x = User::where('id', Auth::user()->id)->where('utype', 'guide')->count();
          @endphp




         <div class="col-md-9 @if($x == 0) d-none @endif">
            <div class="card">
              <div class="card-header p-2">
                <h3>Thanks Your</h3>
                <p>Your Application under review. Please Wait for Approved.</p>
              </div>
            </div>
          </div>

           <div class="col-md-9 @if($x == 1) d-none @endif">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#order" data-toggle="tab">Order Info</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">    
                <!-- tab-pane -->
                              
                <div class="tab-pane  active" id="order">


                @foreach($bookings as $booking)
                <table class="table table-bordered">
                <tr><td>Guide User Id</td><td>{{$booking->guide_user_id}}</td> </tr>
                <tr><td>User Id</td><td>{{$booking->user_id}}</td> </tr>
                <tr><td>Tour Date</td><td>{{$booking->tour_date_one}}</td> </tr>
                
                <tr><td>Start Time</td><td>{{$booking->start_time}}</td> </tr>
                <tr><td>Number Of People</td><td>{{$booking->number_of_people}}</td> </tr>
                <tr><td>Metting Location</td><td>{{$booking->metting_location}}</td> </tr>
                <tr><td>Address One</td><td>{{$booking->address_one}}</td> </tr>
                <tr><td>Map Link One</td><td>{{$booking->map_link_one}}</td> </tr>
                <tr><td>Airport Two</td><td>{{$booking->airport_two}}</td> </tr>
                <tr><td>Flight Two</td><td>{{$booking->flight_two}}</td> </tr>
                <tr><td>Arrival Time Two</td><td>{{$booking->arrival_time_two}}</td> </tr>
                <tr><td>hotel_three</td><td>{{$booking->hotel_three}}</td> </tr>
                <tr><td>name_booked_three</td><td>{{$booking->name_booked_three}}</td> </tr>
                <tr><td>hotel_address_three</td><td>{{$booking->hotel_address_three}}</td> </tr>
                <tr><td>Address_four_one</td><td>{{$booking->address_four_one}}</td> </tr>
                <tr><td>Address_four_two</td><td>{{$booking->address_four_two}}</td> </tr>
                <tr><td>Address_five_one</td><td>{{$booking->address_five_one}}</td> </tr>
                <tr><td>Address_five_two</td><td>{{$booking->address_five_two}}</td> </tr>
                <tr><td>Address_six_one</td><td>{{$booking->address_six_one}}</td> </tr>
                <tr><td>Address_six_two</td><td>{{$booking->address_six_two}}</td> </tr>
                <tr><td>Tour_details_from</td><td>{{$booking->tour_details_from}}</td> </tr>
                <tr><td>Tour_details_to</td><td>{{$booking->tour_details_to}}</td> </tr>
                <tr><td>Payment_info_one</td><td>{{$booking->payment_info_one}}</td> </tr>
                <tr><td>Payment_info_two</td><td>{{$booking->payment_info_two}}</td> </tr>
                <tr><td>Payment_info_three</td><td>{{$booking->payment_info_three}}</td> </tr>
                <tr><td>Status</td><td>{{$booking->status}}</td> </tr>
                <tr><td>Payment</td><td>{{$booking->payment}}</td> </tr>
                </table>

                @endforeach

              </div>


                    <!-- tab-pane -->

                    <div class="tab-pane" id="order2">


                    @foreach($users as $user)
                      <table class="table table-bordered">
                                                      
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
                    <tr><td>Home Phone</td><td>{{$user->homephone}}</td> </tr>
                    <tr><td>Cell Phone</td><td>{{$user->cellphone}}</td> </tr>
                    <tr><td>Skypename</td><td>{{$user->skypename}}</td> </tr>
                    <tr><td>Contacttime</td><td>{{$user->contacttime}}</td> </tr>
                    <tr><td>Licensed</td><td>{{$user->licensed}}</td> </tr>
                    <tr><td>License detail</td><td>{{$user->licensedetail}}</td> </tr>
                    <tr><td>Detail</td><td>{{$user->detail}}</td> </tr>
                    <tr><td>Notes</td><td>{{$user->notes}}</td> </tr>
                    <tr><td>Status</td><td>{{$user->status}}</td> </tr>
                    </table>
                    @endforeach

                    </div>



                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection