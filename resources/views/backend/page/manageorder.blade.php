


      


        <!-- Content Body Start -->
        <div class="content-body">

            <div class="manage-slier-area">



  @if ($message = Session::get('success'))

                    <div class="alert alert-success alert-block mt-3">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>

                  @endif

                  @if (count($errors) > 0)

                        <ul class="alert alert-danger pl-5">

                          @foreach($errors->all() as $error)

                             <li>{{ $error }}</li> 

                          @endforeach

                        </ul>

                @endif

@php         
use App\Models\User;
use App\Models\location;
use App\Models\booking;

$bookings  = booking::get();

$locations = location::get();
$users = User::where('utype', 'guide')->get();
@endphp

<!-- where('id', 1)-> -->


                <div class="row">
                  
                    <div class="col-12 mb-6">
                        <div class="card">
                            <div class="card-head border-bottom">
                                <h4 class="title">Basic Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="manage-table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Guide Name</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Booking Date</th>
                                                <th scope="col">Booking status</th>
                                                 <th scope="col">Payment</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Approve</th>
                                               <th scope="col">Payment</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bookings as $booking)
                                           

                                            <tr>
                                                <td>
                                                    <div class="id">{{$booking->id}}</div>
                                                </td>
                                                <td>
                                                    <div class="name">
                                                        <h6>{{$booking->guide_user_id}}</h6>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="country">
                                                        <h6>{{$booking->user_id}}</h6>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="name">
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

                                                    </div>
                                                </td>
                                              
                                                <td>
                                                    <div class="country">
                                                        {{$booking->status}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="country">
                                                        {{$booking->payment}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="button-box">
                                                         <a href="/admin/view/order/{{$booking->id}}/show" class="btn-sm btn btn-primary mr-1 mb-1">View</a>
                                                       
                                                    </div>
                                                </td>
                                                 
                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$booking->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Approve</a>
                                                     
                                                    </div>
                                                </td>

                                                 <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalPayment{{$booking->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Payment</a>
                                                     
                                                    </div>
                                                </td>



                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalDetail{{$booking->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Delete </a>
                                                     
                                                    </div>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Start details -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Modal -->
 @foreach($bookings as $user)
                        <div class="modal fade" id="exampleModalDetail{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-head border-bottom">
                                                <h4 class="title">Are You Sure</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                             <div class="card-body">
                                               
                                                    
                                                    <div class="row mb-n4">


                                                        

                                                   
                                                       

                                                        <div class="col-12 mb-4">
                                                           
                                                          
                                                          <a href="/admin/orderdestroy/{{$user->id}}" class="btn btn-primary">Yes </a>

                                                           <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">No</span>
                                                </button>
                                                  </div>  </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 @endforeach







                    </div>
                </div>
<!-- End details -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- Modal -->
@foreach($bookings as $user)
                        <div class="modal fade" id="exampleModalCenter{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-head border-bottom">
                                                <h4 class="title">Are You Sure</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{route('backend.approveorder')}}"  enctype="multipart/form-data">
                                        @csrf



                                                    
                                                    <div class="row mb-n4">


                                                        

                                                

                                                   
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="id">Booking id</label>
                                                            <input type="text" class="form-control" name="id" placeholder="user id" value="{{$booking->id}}">
                                                        </div>

                                                         

                                                        







                                                        <div class="col-12 mb-4">
                                                            <input type="submit" value="Yes" class="btn btn-primary">
                                                          

                                                           <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">No</span>
                                                </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 @endforeach







                    </div>
                </div>



<div class="row">
                    <div class="col-md-12">
                        <!-- Modal -->
@foreach($bookings as $user)
                        <div class="modal fade" id="exampleModalPayment{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalPaymentTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-head border-bottom">
                                                <h4 class="title">Are You Sure</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{route('backend.approvepayment')}}"  enctype="multipart/form-data">
                                        @csrf



                                                    
                                                    <div class="row mb-n4">


                                                        

                                                

                                                   
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="id">Booking id</label>
                                                            <input type="text" class="form-control" name="id" placeholder="user id" value="{{$booking->id}}">
                                                        </div>

                                                         

                                                        







                                                        <div class="col-12 mb-4">
                                                            <input type="submit" value="Yes" class="btn btn-primary">
                                                          

                                                           <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">No</span>
                                                </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 @endforeach







                    </div>
                </div>



            </div>

        </div>
        <!-- Content Body End -->

     