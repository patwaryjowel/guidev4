


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
                                    <div class="avatar-lg guide-show-image">
                                        <img src="{{asset('assets/images/user/'.$user->image)}}" alt="">
                                        <style>
                                            .guide-show-image img {
                                                width: 150px;
                                                height: 150px;
                                                border-radius: 50000px;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile2">
                                	<table class="table table-bordered">
                                        <tr><td>Prefix</td><td>{{$user->prefix}}</td> </tr>
                                        <tr><td>Name</td><td>{{$user->name}}</td> </tr>
                                        <tr><td>Email</td><td>{{$user->email}}</td> </tr>
                                        <!-- <tr><td>utype</td><td>{{$user->utype}}</td> </tr>
                                        <tr><td>token</td><td>{{$user->token}}</td> </tr> -->
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
                                        <tr><td>Licensed</td><td>{{$user->licensed}}</td> </tr>
                                        <tr><td>Licensedetail</td><td>{{$user->licensedetail}}</td> </tr>
                                        <tr><td>Detail</td><td>{{$user->detail}}</td> </tr>
                                        <tr><td>Notes</td><td>{{$user->notes}}</td> </tr>
                                        <tr><td>Status</td><td>
                                        @php
                                        $x = $user->status;
                                        @endphp
                                        @if($x == 1)
                                        Approved
                                        @else
                                        Not Approve
                                        @endif
                                        </td> </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="contact2">
                                    <table class="table table-bordered">
                                        <tr><td>Email</td><td>{{$user->email}}</td> </tr>
                                        <tr><td>Home phone</td><td>{{$user->homephone}}</td> </tr>
                                        <tr><td>Cell phone</td><td>{{$user->cellphone}}</td> </tr>
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




























