


<!-- Content Body Start -->
        <div class="content-body">
         

            <div class="row">
               

                <!--Tab With Icon Start-->
                <div class="col-12 mb-6">
                    <div class="card">
                        <div class="card-head border-bottom">
                            <h4 class="title">{{$user->name}}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home2"><!-- <i class="fa fa-home mr-1"></i> --> Image</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile2"><i class="fa fa-user mr-1"></i> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contact2"><i class="fa fa-envelope mr-1"></i> Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home2">
                                    <div class="avatar-lg">
     <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
   
</div>
                                </div>
                                <div class="tab-pane fade" id="profile2">
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
                                <div class="tab-pane fade" id="contact2">
                                    <table class="table table-bordered">
                                  

<tr><td>email</td><td>{{$user->email}}</td> </tr>
<tr><td>home phone</td><td>{{$user->homephone}}</td> </tr>
<tr><td>cell phone</td><td>{{$user->cellphone}}</td> </tr>
<tr><td>Skype Name</td><td>{{$user->skypename}}</td> </tr>
</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Tab With Icon End-->

                

              

              

               

              
            </div>
        </div>
        <!-- Content Body End -->




























