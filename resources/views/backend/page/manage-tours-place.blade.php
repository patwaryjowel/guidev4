
@php 
use App\Models\User;
$users = User::where('utype', 'guide')->where('status', 1)->get();
@endphp



        <!-- Content Body Start -->
        <div class="content-body">

            <div class="manage-slier-area">

                <div class="row">
                    <div class="col-xl-6 col-12 mb-6">


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



                        <div class="card">
                            <div class="card-head border-bottom">
                                <h4 class="title">Basic Form</h4>

                                
                            </div>
                            <div class="card-body">
                                 <form method="post" action="{{route('backend.tourplacestore')}}"  enctype="multipart/form-data">
                                        @csrf
                                    <div class="row mb-n4">
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="image">Tours Image Choose</label>
                                            <input id="formLayoutUsername1" class="form-control" name="image" type="file" placeholder="Tours Image">
                                        </div>
                                       


                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="title">Tours Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Tours Title">
                                        </div>


 
              

                <!--TinyMCE Start-->
                <div class="col-12 mb-6">
                   <!--  <div class="card">
                       
                        <div class="card-body"> -->
                            <label class="form-label" for="details">Tours Detsils</label>
                            <textarea name="details" class="tinymce">Next, use our Get Started docs to setup Tiny!</textarea>
                      <!--   </div>
                    </div> -->
                </div>
                <!--TinyMCE End-->
            






                                                @php
                                                use App\Models\location;
                                                $locations = location::all();
                                                @endphp
                                            <div class="col-12 mb-4">
                                            <label class="form-label" for="location_id">Tours location</label>
                                            <select class="form-select" name="location_id">
                                                <option value="">select location</option>

                                                @foreach($locations as $location)

                                                <option value="{{$location->id}}">{{$location->location}}</option>

                                           
                                               

                                                @endforeach
                                            </select>



                                      
                                        
                                        </div>

<div class="col-12 mb-4">
            <label class="form-label" for="guide_id">Tours Guide</label>
                <select class="form-select" name="guide_id">
                    <option value="">Select</option>
                    @foreach($users as $user)

                    <option value="{{$user->id}}">{{$user->name}} - {{$user->location}} ({{$user->guidenumber}}) </option>
                    @endforeach
                </select>
        </div>


                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="map_link">Tours Map Link</label>
                                            <input type="text" name="map_link" class="form-control" placeholder="Tours Map Link">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <input type="submit" value="Add Now" class="btn btn-primary">
                                            <input type="submit" value="Cancle" class="btn btn-danger">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 mb-6">
                        <div class="card">
                            <div class="card-head border-bottom">
                                <h4 class="title">Tour Places @if(isset($filter_location)) in - {{$filter_location->location}} @endif</h4>
                                <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter By Division
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if(!is_null($locations))
                                        @foreach($locations as $location)
                                        <a class="dropdown-item" href="{{route('backend.filter.tourplacearea',$location->id)}}">{{$location->location}}</a>
                                        @endforeach
                                    @endif
                                    
                                </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="manage-table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                            @foreach($tours as $tour)

                            @php
                             $locationnames = location::where('id', $tour->location_id)->get();
                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="id">{{$tour->id}}</div>
                                                </td>
                                                <td>
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/tour-place/'.$tour->image)}}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="title">
                                                        @foreach($locationnames as $locationname)
                                                        <h6>{{$locationname->location}}</h6>
                                                        @endforeach
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="description">
                                                        <p>{{$tour->title}}</p>
                                                    </div>
                                                </td>


                                               


                                                <td>
                                                    <div class="button-box">
                                                         <a href="/admin/manage-guide-for-tour/{{$tour->id}}"  class="btn-sm btn btn-primary mr-1 mb-1">Guide Select</a>
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$tour->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Edit</a>
                                                        <a href="/admin/manage-tours-place/{{$tour->id}}" class="btn-sm btn btn-danger mr-1 mb-1">Delete</a>
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

                        @foreach($tours as $tour)
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter{{$tour->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-head border-bottom">
                                                <h4 class="title">Slider Data Update </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="card-body">


                                                <form method="post" action="{{route('tourplace.update')}}"  enctype="multipart/form-data">
                                        @csrf
                                    <div class="row mb-n4">
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="image">Tours Image Choose</label>
                                            <input id="formLayoutUsername1" class="form-control" name="image" type="file" placeholder="Tours Image">
                                        </div>
                                       
                                            


                                             <div class="col-12 mb-4" style="display: none;">
                                            <label class="form-label" for="id">Tours id</label>
                                            <input type="text" name="id" class="form-control" value="{{$tour->id}}" placeholder="Tours Title">
                                        </div>




                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="title">Tours Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$tour->title}}" placeholder="Tours Title">
                                        </div>


 
              

                <!--TinyMCE Start-->
                <div class="col-12 mb-6">
                   <!--  <div class="card"> -->
                        <!-- <div class="card-head border-bottom">
                            <h4 class="title">Tours Details</h4>
                        </div> -->
                       <!--  <div class="card-body"> -->
                            <label class="form-label" for="details">Tours Details</label>
                           
                            <textarea name="details" class="tinymce">
                           
                                {!!$tour->details!!} 
                             </textarea>
                       <!--  </div> -->
                   <!--  </div> -->
                </div>
                <!--TinyMCE End-->
            








                                   



   

     

                                            <div class="col-12 mb-4">
                                            <label class="form-label" for="location_id">Tours location</label>
                                            <select class="form-select" name="location_id">


 

                                                @foreach($locations as $location)

                                                <option {{ $location->id == '2' ? "selected" : ""}}  value="{{$location->id}} ">{{$location->location}} 
                                                
                                               
                                                </option>

                                           
                                               

                                                @endforeach
                                            </select>



                                      
                                        
                                        </div>
        



       


        <div class="col-12 mb-4">
            <label class="form-label" for="guide_id">Tours Guide</label>
                <select class="form-select" name="guide_id">
                    <option value="">Select</option>
                    @foreach($users as $user)

                    <option value="{{$user->id}}">{{$user->name}} - {{$user->location}} ({{$user->guidenumber}}) </option>
                    @endforeach
                </select>
        </div>





                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="map_link">Tours Map Link</label>
                                            <input type="text" name="map_link" class="form-control" value="{{$tour->map_link}}" placeholder="Tours Map Link">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <input type="submit" value="Add Now" class="btn btn-primary">
                                            <input type="submit" value="Cancle" class="btn btn-danger">
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

      