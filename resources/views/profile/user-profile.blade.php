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
                       src="{{asset('assets/images/user/'.Auth::user()->image)}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}  </h3>

                <p class="text-muted text-center"> 
                  Welcome New Tour Guide 
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
             
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
            
            </div> -->
            <!-- /.card -->
          </div>
          <!-- /.col -->




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
                 
                   <li class="nav-item"><a class="nav-link" href="#image" data-toggle="tab">Image</a></li>
                   <li class="nav-item"><a class="nav-link" href="#personal" data-toggle="tab">Personal</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#order" data-toggle="tab">Order Info</a></li>
                   



                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                 
                
<div class="tab-pane" id="image">


@foreach($users as $user)
  <form method="post"  action="{{route('guide.personalimageupdate')}}" enctype="multipart/form-data">
    <input type="text" class="d-none" value="{{Auth::user()->id}}" name="id">
@csrf
 <input type="text" class="d-none" value="{{$user->name}}" name="name" id="name" placeholder="name">

<div class="form-group row">
  <label for="image" class="col-sm-2 col-form-label">image</label>
  <div class="col-sm-10">
    <input type="file" class="form-control"  name="image" id="image" placeholder="image">
  </div>
</div>


 <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    @endforeach

</div>


 <!-- tab-pane -->

<div class="tab-pane" id="personal">


@foreach($users as $user)
  <form method="post"  action="{{route('userprofileupdate')}}" enctype="multipart/form-data">
    <input type="text" class="d-none" value="{{Auth::user()->id}}" name="id">
@csrf




<div class="form-group row">
  <label for="prefix" class="col-sm-2 col-form-label">prefix</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->prefix}}" name="prefix" id="prefix" placeholder="prefix">
  </div>
</div> 
<div class="form-group row">
  <label for="name" class="col-sm-2 col-form-label">name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->name}}" name="name" id="name" placeholder="name">
  </div>
</div> 
<div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label">email</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->email}}" name="email" id="email" placeholder="email">
  </div>
</div> 




<div class="form-group row">
  <label for="address" class="col-sm-2 col-form-label">address</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->address}}" name="address" id="address" placeholder="address">
  </div>
</div>

<div class="form-group row">
  <label for="zip" class="col-sm-2 col-form-label">zip</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->zip}}" name="zip" id="zip" placeholder="zip">
  </div>
</div> 

<div class="form-group row">
  <label for="city" class="col-sm-2 col-form-label">city</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->city}}" name="city" id="city" placeholder="city">
  </div>
</div> 

<div class="form-group row">
  <label for="country" class="col-sm-2 col-form-label">country</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->country}}" name="country" id="country" placeholder="country">
  </div>
</div> 


<div class="form-group row">
  <label for="birthday" class="col-sm-2 col-form-label">birthday</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->birthday}}" name="birthday" id="birthday" placeholder="birthday">
  </div>
</div> 




<div class="form-group row">
  <label for="homephone" class="col-sm-2 col-form-label">homephone</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->homephone}}" name="homephone" id="homephone" placeholder="homephone">
  </div>
</div> 

<div class="form-group row">
  <label for="cellphone" class="col-sm-2 col-form-label">cellphone</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->cellphone}}" name="cellphone" id="cellphone" placeholder="cellphone">
  </div>
</div> 

<div class="form-group row">
  <label for="skypename" class="col-sm-2 col-form-label">skypename</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->skypename}}" name="skypename" id="skypename" placeholder="skypename">
  </div>
</div> 
<!--
<div class="form-group row">
  <label for="contacttime" class="col-sm-2 col-form-label">contacttime</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->contacttime}}" name="contacttime" id="contacttime" placeholder="contacttime">
  </div>
</div> 

 <div class="form-group row">
  <label for="licensed" class="col-sm-2 col-form-label">licensed</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->licensed}}" name="licensed" id="licensed" placeholder="licensed">
  </div>
</div> 

<div class="form-group row">
  <label for="licensedetail" class="col-sm-2 col-form-label">licensedetail</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->licensedetail}}" name="licensedetail" id="licensedetail" placeholder="licensedetail">
  </div>
</div> 

<div class="form-group row">
  <label for="detail" class="col-sm-2 col-form-label">detail</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->detail}}" name="detail" id="detail" placeholder="detail">
  </div>
</div>  -->

<!-- <div class="form-group row">
  <label for="city" class="col-sm-2 col-form-label">city</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->city}}" name="city" id="city" placeholder="city">
  </div>
</div>  
<div class="form-group row">
  <label for="country" class="col-sm-2 col-form-label">country</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->country}}" name="country" id="country" placeholder="country">
  </div>
</div> 
<div class="form-group row">
  <label for="biography" class="col-sm-2 col-form-label">biography</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->biography}}" name="biography" id="biography" placeholder="biography">
  </div>
</div>
<div class="form-group row">
  <label for="credentials" class="col-sm-2 col-form-label">credentials</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->credentials}}" name="credentials" id="credentials" placeholder="credentials">
  </div>
</div>
<div class="form-group row">
  <label for="guidenumber" class="col-sm-2 col-form-label">guidenumber</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->guidenumber}}" name="guidenumber" id="guidenumber" placeholder="guidenumber">
  </div>
</div> -->

<!--  <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
      <h2>Languages</h2> 
       </div>
  </div>


                  <div class="form-group row">
                 
                  <div class="col-sm-3">
                        <div class="form-check">
                          <label class="form-check-label">Bangla</label>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="basic" name="bangla">
                          <label class="form-check-label">Basic</label>
                        </div>
                     </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="fluent" type="radio" name="bangla">
                          <label class="form-check-label">Fluent</label>
                        </div>
                         </div>
                          <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="conversational" type="radio" name="english">
                          <label class="form-check-label">conversational</label>
                        </div>
                         
                      </div>
                    </div>

                    <div class="form-group row">
                 
                  <div class="col-sm-3">
                        <div class="form-check">
                          <label class="form-check-label">English</label>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="basic" name="english">
                          <label class="form-check-label">Basic</label>
                        </div>
                     </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="fluent" type="radio" name="english">
                          <label class="form-check-label">Fluent</label>
                        </div>
                         </div>
                          <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="conversational" type="radio" name="english">
                          <label class="form-check-label">conversational</label>
                        </div>
                         
                      </div>
                    </div>

              
                     <div class="form-group row">
                 
                  <div class="col-sm-3">
                        <div class="form-check">
                          <label class="form-check-label">Arabic</label>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="basic" name="arabic">
                          <label class="form-check-label">Basic</label>
                        </div>
                     </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="fluent" type="radio" name="arabic">
                          <label class="form-check-label">Fluent</label>
                        </div>
                         </div>
                          <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="conversational" type="radio" name="arabic">
                          <label class="form-check-label">conversational</label>
                        </div>
                         
                      </div>
                    </div>

                    <div class="form-group row">
                 
                  <div class="col-sm-3">
                        <div class="form-check">
                          <label class="form-check-label">Hindi</label>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="basic" name="hindi">
                          <label class="form-check-label">Basic</label>
                        </div>
                     </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="fluent" type="radio" name="hindi">
                          <label class="form-check-label">Fluent</label>
                        </div>
                         </div>
                          <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="conversational" type="radio" name="hindi">
                          <label class="form-check-label">conversational</label>
                        </div>
                         
                      </div>
                    </div>


<div class="form-group row">
  <label for="notes" class="col-sm-2 col-form-label">notes</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->notes}}" name="notes" id="notes" placeholder="notes">
  </div>
</div> -->










 <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    @endforeach

</div>


 <!-- tab-pane -->
               
<div class="tab-pane  active" id="order">


@foreach($bookings as $booking)
<table class="table table-bordered">
<tr><td>guide_user_id</td><td>{{$booking->guide_user_id}}</td> </tr>
<tr><td>user_id</td><td>{{$booking->user_id}}</td> </tr>
<tr><td>tour_date_one</td><td>{{$booking->tour_date_one}}</td> </tr>
<tr><td>tour_date_two</td><td>{{$booking->tour_date_two}}</td> </tr>
<tr><td>tour_date_three</td><td>{{$booking->tour_date_three}}</td> </tr>
<tr><td>tour_date_four</td><td>{{$booking->tour_date_four}}</td> </tr>
<tr><td>tour_date_five</td><td>{{$booking->tour_date_five}}</td> </tr>
<tr><td>tour_date_six</td><td>{{$booking->tour_date_six}}</td> </tr>
<tr><td>tour_date_seven</td><td>{{$booking->tour_date_seven}}</td> </tr>
<tr><td>tour_date_eight</td><td>{{$booking->tour_date_eight}}</td> </tr>
<tr><td>tour_date_nine</td><td>{{$booking->tour_date_nine}}</td> </tr>
<tr><td>tour_date_ten</td><td>{{$booking->tour_date_ten}}</td> </tr>
<tr><td>start_time</td><td>{{$booking->start_time}}</td> </tr>
<tr><td>number_of_people</td><td>{{$booking->number_of_people}}</td> </tr>
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

@endforeach

</div>


 <!-- tab-pane -->

<div class="tab-pane" id="order2">


@foreach($users as $user)
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