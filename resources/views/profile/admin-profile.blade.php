@extends('profile.master.admin')
@section('content')


@php
use App\Models\User;
$users = User::where('id', Auth::user()->id)->get();
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

     

                  Software Engineer
                </p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                   <li class="nav-item"><a class="nav-link" href="#image" data-toggle="tab">Image</a></li>
                   <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Personal</a></li>
                   



                  
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

<div class="tab-pane active" id="personal">

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

<div class="form-group row">
  <label for="contacttime" class="col-sm-2 col-form-label">contacttime</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->contacttime}}" name="contacttime" id="contacttime" placeholder="contacttime">
  </div>
</div> 

<!-- <div class="form-group row">
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
 -->
<div class="form-group row">
  <label for="detail" class="col-sm-2 col-form-label">detail</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->detail}}" name="detail" id="detail" placeholder="detail">
  </div>
</div> 

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
</div> -->
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
<!-- <div class="form-group row">
  <label for="guidenumber" class="col-sm-2 col-form-label">guidenumber</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$user->guidenumber}}" name="guidenumber" id="guidenumber" placeholder="guidenumber">
  </div>
</div> -->

 <div class="form-group row">
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