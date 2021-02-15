@extends('backend.master.index')
@section('content')
 <!-- Content Body Start -->
 <div class="content-body">
    


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
                                <h4 class="title">Add Package</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('package.store')}}"  enctype="multipart/form-data">
                                        @csrf
                                    <div class="row mb-n4">
                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="title">Package Name</label>
                                            <input type="text" name="package_name" class="form-control" placeholder="Slider Title">
                                        </div>
                                        

                                        <div class="col-12 mb-4">
                                            <input type="submit" value="Add Now" class="btn btn-primary">
                                            <input type="submit" value="Cancel" class="btn btn-danger">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 mb-6">
                        <div class="card">
                            <div class="card-head border-bottom">
                                <h4 class="title">Package</h4>
                            </div>
                            <div class="card-body">
                                <div class="manage-table-wrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Package Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($packages as $package)
                                            <tr>
                                                
                                                <td>
                                                    <div class="title">
                                                        <h6>{{$package->title}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="price">
                                                        <h6>{{$package->price}}</h6>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div class="button-box">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$package->id}}" class="btn-sm btn btn-primary mr-1 mb-1">Edit</a>
                                                        <a href="/manage-package/{{$package->id}}" class="btn-sm btn btn-danger mr-1 mb-1">Delete</a>
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
@foreach($packages as $package)
                        <div class="modal fade" id="exampleModalCenter{{$package->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-head border-bottom">
                                                <h4 class="title">Package Data Update</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{route('admin.update')}}"  enctype="multipart/form-data">
                                        @csrf



                                                    
                                                    <div class="row mb-n4">
                                                        <div class="col-12 mb-4" style="display: none;">
                                                            <label class="form-label" for="id">Package Name</label>
                                                            <input type="text" class="form-control" name="id" placeholder="Package Name" value="{{$package->title}}">
                                                        </div>

                                                        <div class="col-12 mb-4">
                                                            <label class="form-label" for="title">Package Price</label>
                                                            <input type="text" class="form-control" name="title" placeholder="Slider Title" value="{{$slider->title}}">
                                                        </div>
                                                      

                                                        <div class="col-12 mb-4">
                                                            <input type="submit" value="Update Now" class="btn btn-primary">
                                                            <input type="submit" value="Cancel" class="btn btn-danger">
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

     
 </div>
@endsection