

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="@if(Auth::user()->utype == 'admin')
                    {{ route('admin.dashboard') }}
                    @elseif(Auth::user()->utype == 'guide')
                    {{ route('guide.dashboard') }}
                    @else
                    {{ route('dashboard') }}
                    @endif">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @php
    use App\Models\booking;
    $id = $user->id;
    $guide_id = Auth::user()->id;
    $bookings = booking::where('user_id', $id)->where('guide_user_id', $guide_id)->where('status', 1)->get(); 
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
                       src="{{asset('assets/images/user/'.$user->image)}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">Software Engineer</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link  active" href="#detail" data-toggle="tab">Tour Info</a></li>
                    <li class="nav-item"><a class="nav-link" href="#userinfo" data-toggle="tab">User Info</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact2" data-toggle="tab">Contact</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="userinfo">
                   <table class="table table-bordered">              
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
                  </div>
                  <!-- /.tab-pane -->

                        <div class="tab-pane fade" id="contact2">
                          <table class="table table-bordered">
                              <tr><td>email</td><td>{{$user->email}}</td> </tr>
                              <tr><td>home phone</td><td>{{$user->homephone}}</td> </tr>
                              <tr><td>cell phone</td><td>{{$user->cellphone}}</td> </tr>
                              <tr><td>Skype Name</td><td>{{$user->skypename}}</td> </tr>
                          </table>
                        </div>
                 
                  <div class="active tab-pane" id="detail">
                    <!-- Main content -->
                    @foreach($bookings as $booking)

                    @php
                    $x = $booking->metting_location;
                    @endphp


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Details</th>
                     <!--  <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Tour Date</td>
                     
                      <td>


                    @if (!empty($booking->tour_date_one))
                     {{$booking->tour_date_one}} <br>
                    @endif
                    @if (!empty($booking->tour_date_two))
                     {{$booking->tour_date_two}} <br>
                    @endif
                    @if (!empty($booking->tour_date_three))
                     {{$booking->tour_date_three}} <br>
                    @endif
                    @if (!empty($booking->tour_date_four))
                     {{$booking->tour_date_four}} <br>
                    @endif
                    @if (!empty($booking->tour_date_five))
                     {{$booking->tour_date_five}} <br>
                    @endif
                    @if (!empty($booking->tour_date_six))
                     {{$booking->tour_date_six}} <br>
                    @endif
                    @if (!empty($booking->tour_date_seven))
                     {{$booking->tour_date_seven}} <br>
                    @endif
                    @if (!empty($booking->tour_date_eight))
                     {{$booking->tour_date_eight}} <br>
                    @endif
                    @if (!empty($booking->tour_date_nine))
                     {{$booking->tour_date_nine}} <br>
                    @endif
                    @if (!empty($booking->tour_date_ten))
                     {{$booking->tour_date_ten}} <br>
                    @endif


                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Meeting Time</td>
                      <td>
                       {{$booking->start_time}}
                      </td>
                     
                    </tr>
                  
         
              @if ( $x == 'one')
              <tr>
              <td>3.</td>
              <td>Metting Location (Address or Intersection)</td>
              <td>
                ADDRESS/INTERSECTION : {{$booking->address_one}}, <br>
              GOOGLE MAP LINK : {{$booking->map_link_one}} <br>
              </td>
              </tr>
            @endif

              @if ( $x == 'two')
              <tr>
              <td>3.</td>
              <td>Metting Location (AIRPORT)</td>
              <td>
                AIRPORT : {{$booking->airport_two}}, <br>
              FLIGHT : {{$booking->flight_two}}, <br>
              ARRIVAL TIME : {{$booking->arrival_time_two}}
              </td>
              </tr>
            @endif



              @if ( $x == 'three')
              <tr>
              <td>3.</td>
              <td>Metting Location (Ask Guide to suggest a location)</td>
              <td>
              HOTEL : {{$booking->hotel_three}}, <br>
              NAME BOOKED UNDER : {{$booking->name_booked_three}}, <br>
              HOTEL ADDRESS : {{$booking->hotel_address_three}}
              </td>
              </tr>
            @endif

            @if ( $x == 'four')
              <tr>
              <td>3.</td>
              <td>Metting Location (Cruise Ship Port)</td>
              <td>
              Address 01 : {{$booking->address_four_one}}, <br>
              Address 02 : {{$booking->address_four_two}}
              </td>
              </tr>
            @endif

            @if ( $x == 'five')
              <tr>
              <td>3.</td>
              <td>Metting Location (Hotel)</td>
              <td>
              Address 01 : {{$booking->address_five_one}}, <br>
              Address 02 : {{$booking->address_five_two}}
              </td>
              </tr>
            @endif

              @if ( $x == 'six')
              <tr>
              <td>3.</td>
              <td>Metting Location (Monument/Building)</td>
              <td>
              Address 01 : {{$booking->address_six_one}}, <br>
              Address 02 : {{$booking->address_six_two}}
              </td>
              </tr>
            @endif



              <tr>
              <td>4.</td>
              <td>TOUR DETAILS</td>
              <td>
                From : {{$booking->tour_details_from}}, <br>
                To : {{$booking->tour_details_to}}
              </td>
              </tr>

   










                      
                   
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
         
            </div>
            @endforeach
                  </div>
                  <!-- /.tab-pane -->



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
  </div>
 