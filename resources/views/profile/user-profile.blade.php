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
                <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Personal</a></li>
                   <li class="nav-item"><a class="nav-link " href="#image" data-toggle="tab">Image</a></li>
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
                </div><!-- tab-pane -->

                    <div class="tab-pane active" id="personal">


                    @foreach($users as $user)
                      <form method="post"  action="{{route('userprofileupdate')}}" enctype="multipart/form-data">
                        <input type="text" class="d-none" value="{{Auth::user()->id}}" name="id">
                    @csrf


                    <div class="form-group row">
                      <label for="prefix" class="col-sm-2 col-form-label">Prefix</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->prefix}}" name="prefix" id="prefix" placeholder="Prefix">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->name}}" name="name" id="name" placeholder="Name">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->email}}" name="email" id="email" placeholder="Email">
                      </div>
                    </div> 




                    <div class="form-group row">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->address}}" name="address" id="address" placeholder="Address">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="zip" class="col-sm-2 col-form-label">ZIP</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->zip}}" name="zip" id="zip" placeholder="ZIP">
                      </div>
                    </div> 

                    <div class="form-group row">
                      <label for="city" class="col-sm-2 col-form-label">City</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->city}}" name="city" id="city" placeholder="City">
                      </div>
                    </div> 

                    <div class="form-group row">
                      <label for="country" class="col-sm-2 col-form-label">Country</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->country}}" name="country" id="country" placeholder="Country">
                      </div>
                    </div> 


                    <div class="form-group row">
                      <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->birthday}}" name="birthday" id="birthday" placeholder="Birthday">
                      </div>
                    </div> 

                    <div class="form-group row">
                      <label for="homephone" class="col-sm-2 col-form-label">Homephone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->homephone}}" name="homephone" id="homephone" placeholder="Homephone">
                      </div>
                    </div> 

                    <div class="form-group row">
                      <label for="cellphone" class="col-sm-2 col-form-label">Cellphone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->cellphone}}" name="cellphone" id="cellphone" placeholder="Cellphone">
                      </div>
                    </div> 

                    <div class="form-group row">
                      <label for="skypename" class="col-sm-2 col-form-label">Skypename</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$user->skypename}}" name="skypename" id="skypename" placeholder="Skypename">
                      </div>
                    </div> 
                    

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                      </div>
                    </form>
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