


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
                                <h4 class="title">Basic Form</h4>
                            </div>
                            <div class="card-body">
                                 <form method="post" action="{{route('testimonial.store')}}"  enctype="multipart/form-data">
                                        @csrf
                                    
                                    <div class="row mb-n4">
                                         <div class="col-12 mb-4">
                                            <label class="form-label" for="name">Testimonials client Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Testimonials client Name">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="detail">Testimonials Details</label>
                                            <input type="text" name="detail" class="form-control" placeholder="Testimonials Details">
                                        </div>
                                       
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="image">Client Image Choose</label>
                                            <input name="image" class="form-control" type="file" placeholder="Client Image">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="email">Testimonials client Email</label>
                                            <input name="email" class="form-control" type="email" placeholder="demo@hastech.com">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="date">Date</label>
                                            <input class="form-control" name="date" type="text" placeholder="date">
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
                                                <th scope="col">Id</th>
                                                <th scope="col">Client Image</th>
                                                <!-- <th scope="col">Details</th> -->
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach($testimonials as  $testimonial)
                                            <tr>
                                                <td>
                                                    <div class="id">{{$testimonial->id}}</div>
                                                </td>
                                                <td>
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/testimonial/'.$testimonial->image)}}" alt="">
                                                    </div>

                                                </td>
                                               <!--  <td>
                                                    <div class="details">
                                                        <p>{{$testimonial->detail}}</p>
                                                    </div>

                                                </td> -->
                                                <td>
                                                    <div class="Name">
                                                        <p>{{$testimonial->name}}</p>
                                                    </div>
                                                </td>
                                                 <td>
                                                    <div class="email">
                                                        <p>{{$testimonial->email}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="Date">
                                                        <h6>{{$testimonial->date}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$testimonial->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Edit</a>
                                                        <a href="/admin/manage-testimonial/{{$testimonial->id}}" class="btn-sm btn btn-danger mr-1 mb-1">Delete</a>
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
                        @foreach($testimonials as $testimonial)
                        <div class="modal fade" id="exampleModalCenter{{$testimonial->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form method="post" action="{{route('testimonial.update')}}"  enctype="multipart/form-data">
                                        @csrf

 <div class="col-12 mb-4" style="display: none;">
                                                            <label class="form-label" for="id">Slider id</label>
                                                            <input type="text" class="form-control" name="id" placeholder="Slider Title" value="{{$testimonial->id}}">
                                                        </div>




                                    
                                    <div class="row mb-n4">
                                         <div class="col-12 mb-4">
                                            <label class="form-label" for="name">Testimonials client Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$testimonial->name}}" placeholder="Testimonials client Name">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="detail">Testimonials Details</label>
                                            <input type="text" name="detail" class="form-control" value="{{$testimonial->detail}}" placeholder="Testimonials Details">
                                        </div>
                                       
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="image">Client Image Choose</label>
                                            <input name="image" class="form-control" type="file" placeholder="Client Image">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="email">Testimonials client Email</label>
                                            <input name="email" class="form-control" type="email" value="{{$testimonial->email}}" placeholder="demo@hastech.com">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="date">Date</label>
                                            <input class="form-control" name="date" type="text" value="{{$testimonial->date}}" placeholder="date">
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

      