


    


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
use App\Models\tour;


$locations = location::get();
$users = User::where('utype', 'guide')->where('tour_place_id', $member->id)->get();
@endphp

<!-- where('id', 1)-> -->


                <div class="row">
                  
                    <div class="col-12 mb-6">
                        <div class="card">
                            <div class="card-head border-bottom">
                                <h4 class="title">Guides for - {{$member->title}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="manage-table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Country</th>
                                               <!--  <th scope="col">City</th> -->
                                               
                                                <th scope="col">Apply Tour Place</th>
                                                 <th scope="col">Approve Tour Location</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Approve</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                           

                                            <tr>
                                                <td>
                                                    <div class="id">{{$user->id}}</div>
                                                </td>
                                                <td>
                                                    <div class="name">
                                                        <h6>{{$user->name}}</h6>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="country">
                                                        <h6>{{$user->country}}</h6>
                                                    </div>
                                                </td>
                                                
                                               
                                              
                                              


                                                  @php
    $tours = tour::where('id', $user->tour_place_id)->get();

    @endphp
                                                 <td>
    @foreach($tours as $tour)
    @php
    $tourlocation = location::where('id', $tour->location_id)->get();
    @endphp
     @foreach($tourlocation as $tourlocation)
                                               
                                                    <div class="country">
                                                         <h6>{{$tour->title}} - {{$tourlocation->location}}</h6>
                                                    </div>
                                                
                                                @endforeach
                                                  @endforeach
                                                </td>
                                                 <td>
                                                    <div class="name">
                                                        <h6>{{$user->location}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="button-box">
                                                         <a href="/admin/view/{{$user->id}}/show" class="btn-sm btn btn-primary mr-1 mb-1">View</a>
                                                       
                                                    </div>
                                                </td>
                                                 
                                                <td>
                                                    <div class="button-box">
                                                        @if($member->guide_id == $user->id)
                                                        
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$user->id}}" class="btn-sm btn btn-success mr-1 mb-1">
                                                            Approved</span>
                                                        </a>
                                                        @else
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$user->id}}" class="btn-sm btn btn-primary mr-1 mb-1">
                                                            Approve</span>
                                                        </a>

                                                        @endif

                                                
                                                     
                                                    </div>
                                                </td>



                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalDetail{{$user->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Delete </a>
                                                     
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
 @foreach($users as $user)
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
                                                           
                                                          
                                                          <a href="/admin/guidedestroy/{{$user->id}}" class="btn btn-primary">Yes </a>

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
                                                <form method="post" action="{{route('backend.approvetourguide')}}"  enctype="multipart/form-data">
                                        @csrf



                                                    
                                                    <div class="row mb-n4">


                                                        

                                                

                                                   
                                                        <div class="col-12 mb-4" style="display: none;">
                                                            <label class="form-label" for="id">tour id</label>
                                                            <input type="text" class="form-control" name="id" value="{{$member->id}}">
                                                        </div>

                                                         <div class="col-12 mb-4" style="display: none;">
                                                            <label class="form-label" for="guide_id">guideapply id</label>
                                                            <input type="text" class="form-control" name="guide_id" placeholder="user id" value="{{$user->id}}">
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

     