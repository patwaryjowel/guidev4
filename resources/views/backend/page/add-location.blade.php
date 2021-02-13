


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

         




                <div class="row">
                    <div class="col-xl-6 col-12 mb-6">
                        <div class="card">
                            <div class="card-head border-bottom">
                                <h4 class="title">Add Location</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('backend.locationstore')}}"  enctype="multipart/form-data">
                                        @csrf
                                    <div class="row mb-n4">
                                       <div class="col-12 mb-4">
                                        <label class="form-label" for="location">Location</label>
                                        <input type="text" name="location" class="form-control" placeholder="location">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label class="form-label" for="image">Location Hero Image</label>
                                        <input id="image" class="form-control" name="image"  type="file">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label class="form-label" for="heading">Heading</label>
                                        <input type="text" name="heading" class="form-control" placeholder="heading">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label class="form-label" for="subheading">Subheading</label>
                                        <input type="text" name="subheading" class="form-control" placeholder="subheading">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label class="form-label" for="title">Sidebar Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="title">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label class="form-label" for="details">Sidebar Details</label>
                                        <input type="text" name="details" class="form-control" placeholder="details">
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
                                <h4 class="title">Basic Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="manage-table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php
                                            use App\Models\location;
                                            $locations = location::all();
                                            @endphp
                                            @foreach($locations as $location)
                                            <tr>
                                                <td>
                                                    <div class="id">{{$location->id}}</div>
                                                </td>
                                                <td>
                                                    <div class="location">
                                                        <h6>{{$location->location}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/location/'.$location->image)}}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$location->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Edit</a>
                                                        <a href="/admin/location-delete/{{$location->id}}" class="btn-sm btn btn-danger mr-1 mb-1">Delete</a>
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
                        @foreach($locations as $location)
                        <div class="modal fade" id="exampleModalCenter{{$location->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-head border-bottom">
                                                <h4 class="title">Location Data Update</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{route('backend.locationupdate')}}"  enctype="multipart/form-data">
                                                    <input type="text" class="d-none" name="id"  value="{{$location->id}}">
                                                        @csrf
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="location">Location</label>
                                                            <input type="text" class="form-control" name="location" placeholder="location" value="{{$location->location}}">
                                                        </div>
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="image">Image</label>
                                                            <input id="image" class="form-control" name="image"  type="file">
                                                        </div>
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="heading">Heading</label>
                                                            <input type="text" class="form-control" name="heading" placeholder="heading" value="{{$location->heading}}">
                                                        </div>
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="subheading">Subheading</label>
                                                            <input type="text" class="form-control" name="subheading" placeholder="subheading" value="{{$location->subheading}}">
                                                        </div>
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="title">Sidebar Title</label>
                                                            <input type="text" class="form-control" name="title" placeholder="title" value="{{$location->title}}">
                                                        </div>
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="details">Sidebar Details</label>
                                                            <input type="text" class="form-control" name="details" placeholder="details" value="{{$location->details}}">
                                                        </div>

                                                        <div class="col-12 mb-4">
                                                            <input type="submit" value="Update Now" class="btn btn-primary">
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

     