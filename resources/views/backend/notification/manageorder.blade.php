<!-- Notification Start -->
@php
use App\Models\booking;
$allcount  = booking::count();
$approvecount  = booking::where('status', 1)->count();
$newcount = $allcount - $approvecount;
//$newcount = $allcount - 30;
@endphp   


                                    <li class="nav-item dropdown notification">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="icon"><i data-feather="bell"></i></span>
                                            <span class="badge badge-dot badge-success">badge</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">


                                            
                                           <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small success"><i data-feather="gift"></i></div>
                                                    <div class="media-body">

                                                       
                                                        <h5 class="media-title">



                                                             @php
                                                 $x = $newcount;

                                                 @endphp  
                                                            @if($x == 0)
                                                           No New Order received
                                                            @else
                                                             {{$newcount}} New Order received
                                                            @endif


                                                           


                                                        </h5>



                                                       
                                                    </div>
                                                </div>
                                            </a>







                                          <!--   <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small primary"><i data-feather="user"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">New User Register</h5>
                                                        <p class="media-text">5 min ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small"><img src="{{asset('admin/assets/images/message/thumb-2.jpg')}}" alt="" /></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title"><span>James</span> send you a message</h5>
                                                        <p class="media-text">15 min ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small danger"><i data-feather="frown"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">Product shipping cancel</h5>
                                                        <p class="media-text">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small success"><i data-feather="gift"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">New Order received</h5>
                                                        <p class="media-text">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item py-2">
                                                <div class="media">
                                                    <div class="media-thumb small warning"><i data-feather="alert-triangle"></i></div>
                                                    <div class="media-body">
                                                        <h5 class="media-title">Server Limit Reached!</h5>
                                                        <p class="media-text">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </a> -->


                                        </div>
                                    </li>
                                    <!-- Notification End -->