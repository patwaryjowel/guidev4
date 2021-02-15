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
          
          <!-- <div class="col-md-3">

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
            </div>

          </div> -->




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

          <div class="col-md-12 @if($x == 1) d-none @endif">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#order" data-toggle="tab">Order Info</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body row">  
                  <!-- tab-pane -->         
                  @foreach($bookings as $booking)
                    @php
                        $guide = App\Models\User::where('id', $booking->guide_user_id)->first();
                        $tour = App\Models\Tour::where('id', $booking->tour_id)->first();
                        $traveler = App\Models\User::where('id', $booking->user_id)->first();
                        $x = $booking->metting_location;
                    @endphp
                    <div class="col-md-4">
                      <div class="card">
                        <img class="card-img-top" src="{{asset('assets/images/tour-place/'.$tour->image )}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$tour->name}}</h5>
                          <p class="card-text">
                            <style>
                              ul.list_ul {
                                  padding: 17px;
                              }
                            </style>
                            <ul class="list_ul">
                              <li> <strong>Tour Date:</strong> {{$booking->tour_date_one}}</li>
                              <li> <strong>Start Time:</strong> {{$booking->start_time}}</li>
                              <li> <strong>Status:</strong>@if($booking->status == 1) Approved @else Processing @endif</li>
                              <li> <strong>Packge:</strong> {{$booking->tour_price}}</li>
                              <li> <strong>Guide Name:</strong> 
                                @if(isset($guide->name))
                                    {{$guide->name}}@else Guide not selected.
                                @endif
                              </li>
                            </ul>
                            
                            <table class="border-top mb-2 w-100">
                              <tr class="border-bottom">
                                <th>
                                  <strong class="pickup-guid">Metting Location:</strong>
                                </th>
                                <th>
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
                                    
                                  </th>
                              </tr>
                              <tr class="@if( $x == 1)@else d-none @endif">
                                <td><strong>Address / Intersection:</strong></td>
                                <td>{{$booking->address_one}}</td> 
                              </tr>
                              <tr class="@if( $x == 1)@else d-none @endif">
                                <td><strong>Google Map Link</strong></td>
                                <td>{{$booking->map_link_one}}</td> 
                              </tr>

                              <tr class="@if( $x == 2)@else d-none @endif">
                                <td><strong>Airport Name:</strong> </td>
                                <td>{{$booking->airport_two}}</td>
                              </tr>
                              <tr class="@if( $x == 2)@else d-none @endif">
                                <td><strong>Flight Number:</strong></td>
                                <td>{{$booking->flight_two}}</td> 
                              </tr>
                              <tr class="@if( $x == 2)@else d-none @endif">
                                <td><strong>Arrival Time:</strong></td>
                                <td>{{$booking->arrival_time_two}}</td>
                              </tr>

                              <tr class="@if( $x == 3)@else d-none @endif">
                                <td><strong>Hotel:</strong></td>
                                <td>{{$booking->hotel_three}}</td>
                              </tr>
                              <tr class="@if( $x == 3)@else d-none @endif">
                                <td><strong>Name Booked under:</strong></td>
                                <td>{{$booking->name_booked_three}}</td>
                              </tr>
                              <tr class="@if( $x == 3)@else d-none @endif">
                                <td><strong>Hotel Address:</strong></td>
                                <td>{{$booking->hotel_address_three}}</td> 
                              </tr>

                              <tr class="@if( $x == 4)@else d-none @endif">
                                <td><strong>Ship Name:</strong></td>
                                <td>{{$booking->address_four_one}}</td>
                              </tr>
                              <tr class="@if( $x == 4)@else d-none @endif">
                                <td><strong>Ship Address:</strong></td>
                                <td>{{$booking->address_four_two}}</td>
                              </tr>

                              <tr class="@if( $x == 5)@else d-none @endif">
                                <td>Address_five_one:</td>
                                <td>{{$booking->address_five_one}}</td> 
                              </tr>
                              <tr class="@if( $x == 5)@else d-none @endif">
                                <td>address_five_two</td>
                                <td>{{$booking->address_five_two}}</td> 
                              </tr>

                              <tr class="@if( $x == 6)@else d-none @endif">
                                <td><strong>Area Name:</strong></td>
                                <td>{{$booking->address_six_one}}</td>
                              </tr>
                              <tr class="@if( $x == 6)@else d-none @endif">
                                <td><strong>House Number, Block Name, Road Number:</strong></td>
                                <td>{{$booking->address_six_two}}</td> 
                              </tr>
                            </table>
                            

                          </p>
                        </div>
                      </div>
                    </div>

                  @endforeach

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