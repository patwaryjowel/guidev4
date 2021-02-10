@extends('profile.master.index')
@section('content')


@php
use App\Models\guidedetail;
use App\Models\guideapply;
use App\Models\User;


  $guidedetails = guidedetail::where('user_id', Auth::user()->id)->get();
  $guideapplies = guideapply::where('user_id', Auth::user()->id)->get();
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

     
@foreach($guidedetails as $guidedetail)
{{$guidedetail->country}}
@endforeach
    
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


@php
$x = Auth::user()->status;
@endphp 






         <div class="col-md-9 @if($x == 1) d-none @endif">
            <div class="card">
              <div class="card-header p-2">

                <h2>Some Message</h2>
              </div>
            </div>
          </div>


          <!-- /.col -->
          <div class="col-md-9 @if($x == 0) d-none @endif">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                   <li class="nav-item"><a class="nav-link" href="#image" data-toggle="tab">Image</a></li>
                   <li class="nav-item"><a class="nav-link" href="#personal" data-toggle="tab">Personal</a></li>
                   
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('adminlte/dist/img/user7-128x128.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('adminlte/dist/img/user6-128x128.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('adminlte/dist/img/photo1.png')}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="{{asset('adminlte/dist/img/photo2.png')}}" alt="Photo">
                              <img class="img-fluid" src="{{asset('adminlte/dist/img/photo3.jpg')}}" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="{{asset('adminlte/dist/img/photo4.jpg')}}" alt="Photo">
                              <img class="img-fluid" src="{{asset('adminlte/dist/img/photo1.png')}}" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                
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