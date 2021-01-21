


      


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

$locations = location::get();
$users = User::get();
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
                                                <th scope="col">Name</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">City</th>
                                                 <th scope="col">User Type</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Approve</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($guideapplies as $guideapply)
                                            @php  
                                             $usertype = User::where('id', $guideapply->user_id)->first();      
                                            @endphp

                                            <tr>
                                                <td>
                                                    <div class="id">{{$guideapply->id}}</div>
                                                </td>
                                                <td>
                                                    <div class="name">
                                                        <h6>{{$guideapply->name}}</h6>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="country">
                                                        <h6>{{$guideapply->country}}</h6>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="name">
                                                        <h6>{{$guideapply->city}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="country">
                                                        <h6>{{ $usertype->utype}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" class="btn-sm btn btn-primary mr-1 mb-1">Edit</a>
                                                       
                                                    </div>
                                                </td>
                                                 
                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$guideapply->user_id}}" class="btn-sm btn btn-primary mr-1 mb-1">Edit</a>
                                                       <!--  <a href="/manage-slider/{{$guideapply->id}}" class="btn-sm btn btn-danger mr-1 mb-1">Delete</a> -->
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




                <div class="row">
                    <div class="col-md-12">
                        <!-- Modal -->
@foreach($users as $user)
                        <div class="modal fade" id="exampleModalCenter{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{{route('backend.approveguide')}}"  enctype="multipart/form-data">
                                        @csrf



                                                    
                                                    <div class="row mb-n4">


                                                        

                                                <div class="col-12 mb-4">
                                                            <label class="form-label" for="location_id">Location</label>
                                                          
                                                           <select name="location_id" id="location_id" class="form-control">
                                                                @foreach($locations as $location)
                                                                <option value="{{$location->id}}">{{$location->location}}</option>
                                                                 @endforeach
                                                           </select>
                                                        </div>

                                                   
                                                        <div class="col-12 mb-4" style="display: none;">
                                                            <label class="form-label" for="id">guideapply id</label>
                                                            <input type="text" class="form-control" name="id" placeholder="user id" value="{{$user->id}}">
                                                        </div>

                                                       <!--  <div class="col-12 mb-4">
                                                            <label class="form-label" for="namr">Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="guideapply Title" value="{{$guideapply->name}}">
                                                        </div>
                                                       -->

                                                        <div class="col-12 mb-4">
                                                            <input type="submit" value="Yes" class="btn btn-primary">
                                                           <!--  <input type="submit" value="Cancle" class="btn btn-danger"> -->

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

     