


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
                                <h4 class="title">Hero Slider Post</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('backend.store')}}"  enctype="multipart/form-data">
                                        @csrf
                                    <div class="row mb-n4">
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="formLayoutPassword1">Slider Image Choose</label>
                                            <input name="image" id="formLayoutUsername1" class="form-control" type="file">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="title">Slider Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Slider Title">
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
                                <h4 class="title">All Slider Post</h4>
                            </div>
                            <div class="card-body">
                                <div class="manage-table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Number of Slider</th>
                                                <th scope="col">Slider Title</th>
                                                <th scope="col">Slider Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sliders as $slider)
                                            <tr>
                                                <td>
                                                    <div class="id">{{$slider->id}}</div>
                                                </td>
                                                <td>
                                                    <div class="title">
                                                        <h6>{{$slider->title}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/gallery/'.$slider->image)}}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$slider->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Edit</a>
                                                        <a href="/manage-slider/{{$slider->id}}" class="btn-sm btn btn-danger mr-1 mb-1">Delete</a>
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
@foreach($sliders as $slider)
                        <div class="modal fade" id="exampleModalCenter{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-head border-bottom">
                                                <h4 class="title">Slider Data Update</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{route('admin.update')}}"  enctype="multipart/form-data">
                                        @csrf



                                                    
                                                    <div class="row mb-n4">
                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="image">Slider Image Choose</label>
                                                            <input id="formLayoutUsername1" class="form-control" name="image"  type="file">
                                                        </div>

                                                        <div class="col-12 mb-4" style="display: none;">
                                                            <label class="form-label" for="id">Slider id</label>
                                                            <input type="text" class="form-control" name="id" placeholder="Slider Title" value="{{$slider->id}}">
                                                        </div>

                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="title">Slider Title</label>
                                                            <input type="text" class="form-control" name="title" placeholder="Slider Title" value="{{$slider->title}}">
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

     