
@php 
use App\Models\User;
$users = User::where('utype', 'guide')->where('status', 1)->get();
@endphp



        <!-- Content Body Start -->
        <div class="content-body">

            <div class="manage-slier-area">

                <div class="row">
                    <div class="col-xl-5 col-12 mb-6">


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
                                <h4 class="title">Tour Place Form</h4>
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
                                        <div class="col-12 mb-6 textarea-select">
                                        <!--  <div class="card">
                                            
                                                <div class="card-body"> -->
                                                    <label class="form-label" for="details">Tours Detsils</label>
                                                    <textarea name="details" id="tour_detailsone">Next, use our Get Started docs to setup Tiny!</textarea>
                                            <!--   </div>
                                            </div> -->
                                        </div>
                                        <!--TinyMCE End-->
                                        <style>
                                            .textarea-select .note-editor .note-editing-area {
                                                position: relative;
                                                min-height: 218px;
                                            }
                                        </style>


                                        <div class="field_wrapper">
                                            <div class="form-group col-md-12">
                                                <label>Package People and Price</label><br>
                                                <div class="mt-2">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="number" name="people[]" class="form-control col-12 mt-2" placeholder="people" required="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="number" name="price[]" class="form-control col-12 mt-2" placeholder="Price (without sign)" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <a href="javascript:void(0);" class="add_button btn btn-success" title="Add field">Add More</a><br><br>
                                            </div>
                                        </div>



                                            @section('customscripttwo')

                                            <script type="text/javascript">
                                            $(document).ready(function(){
                                                var maxField = 10; //Input fields increment limitation
                                                var addButton = $('.add_button'); //Add button selector
                                                var wrapper = $('.field_wrapper'); //Input field wrapper
                                                var fieldHTML = '<div class="form-group col-md-12 mb-2"><label class="mt-2">People and Price</label><div class="row"><input type="number" name="people[]" class="form-control col-3" placeholder="People" required=""><input type="number" name="price[]" class="form-control col-3" placeholder="Price (without tk)" required=""></div><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>'; //New input field html 
                                                var x = 1; //Initial field counter is 1
                                                
                                                //Once add button is clicked
                                                $(addButton).click(function(){
                                                    //Check maximum number of input fields
                                                    if(x < maxField){ 
                                                        x++; //Increment field counter
                                                        //$(wrapper).append(fieldHTML); //Add field html
                                                        $(wrapper).append('<div class="form-group col-md-12"><label>People and Price</label><input type="number" name="people[]" class="form-control" placeholder="People" required=""><br><input type="number" name="price[]" class="form-control" placeholder="Price" required=""><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>');
                                                    }
                                                });
                                                
                                                //Once remove button is clicked
                                                $(wrapper).on('click', '.remove_button', function(e){
                                                    e.preventDefault();
                                                    $(this).parent('div').remove(); //Remove field html
                                                    x--; //Decrement field counter
                                                });
                                            });
                                            </script>

                                            @endsection
        

                                            @php
                                            use App\Models\location;
                                            $locations = location::all();
                                            @endphp
                                            <div class="col-12 mb-4 mt-3">
                                            <label class="form-label" for="location_id">Tours location</label>
                                            <select class="form-select" name="location_id">
                                                <option value="">select location</option>

                                                @foreach($locations as $location)

                                                <option value="{{$location->id}}">{{$location->location}}</option>

                                            @endforeach
                                        </select>

                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="map_link">Tours Map Lat,Long</label>
                                            <input type="text" name="map_link" class="form-control" placeholder="23.810331,90.412521">
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
                    <div class="col-xl-7 col-12 mb-6">
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
                                                <th scope="col">Guides</th>
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
                                                    <div class="tour__placePost-titel">
                                                        <p>{{$tour->title}}</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a class="btn-sm btn-info me-1 mb-1 text-white" href="{{route('backend.manageguidefortour', $tour->id)}}">View</a>
                                                </td>
                                               


                                                <td>
                                                    <div class="button-box">
                                                         <!-- <a href="/admin/manage-guide-for-tour/{{$tour->id}}"  class="btn-sm btn btn-primary mr-1 mb-1">Guide Select</a> -->
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
                           
                            <textarea name="details" id="tour_detailstwo{{$tour->id}}">

                                {!!$tour->details!!} 
                             </textarea>
                       <!--  </div> -->
                   <!--  </div> -->
                </div>
                <!--TinyMCE End-->
            







                <div class="field_wrapper{{$tour->id}}">
                    <div class="form-group col-md-8" style="padding-left: 0">
                        <label>Package People and Price</label><br>
                        
                            @if(!is_null($tour->price))
                                @php
                                $prices = explode(',',$tour->price);
                                $peoples = explode(',',$tour->people);
                                $i = 0;
                                @endphp
                                @foreach($prices as $price)
                                <div class="row" style="margin: 0;">
                                <input type="number" name="people[]" class="form-control col-3" placeholder="people" required="" value="{{$peoples[$i]}}">
                                <input type="number" name="price[]" class="form-control col-3" placeholder="Price (without sign)" required="" value="{{$price}}">
                                </div>
                                <br>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                            
                            @else
                                <div class="row" style="margin: 0;">
                                <input type="number" name="people[]" class="form-control col-3" placeholder="people" required="">
                                <input type="number" name="price[]" class="form-control col-3" placeholder="Price (without sign)" required="">
                                </div>
                            @endif

                       
                        <br>
                        <a href="javascript:void(0);" class="add_button{{$tour->id}} btn btn-success" title="Add field">Add More</a><br><br>
                    </div>
                </div>
                                   



   

     

                                            <div class="col-12 mb-4">
                                            <label class="form-label" for="location_id">Tours location</label>
                                            <select class="form-select" name="location_id">


 

                                                @foreach($locations as $location)

                                                <option {{ $location->id == '2' ? "selected" : ""}}  value="{{$location->id}} ">{{$location->location}} 
                                                
                                               
                                                </option>

                                           
                                               

                                                @endforeach
                                            </select>



                                      
                                        
                                        </div>
        



       


       <!--  <div class="col-12 mb-4">
            <label class="form-label" for="guide_id">Guide Select</label>
                <select class="form-select" name="guide_id">
                    <option value="">Select</option>
                    @foreach($users as $user)

                    <option value="{{$user->id}}">{{$user->name}} - {{$user->location}} ({{$user->guidenumber}}) </option>
                    @endforeach
                </select>
        </div> -->





                                        <div class="col-12 mb-4">
                                            <label class="form-label" for="map_link">Tours Map Lat,Long</label>
                                            <input type="text" name="map_link" class="form-control" value="{{$tour->map_link}}" placeholder="23.810331,90.412521">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <input type="submit" value="Update" class="btn btn-primary">
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


@section('customscriptthree')
@foreach($tours as $tour)
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button{{$tour->id}}'); //Add button selector
    var wrapper = $('.field_wrapper{{$tour->id}}'); //Input field wrapper
    var fieldHTML = '<div class="form-group col-md-8" style="padding-left: 0"><label>People and Price</label><div class="row" style="margin: 0;"><input type="number" name="people[]" class="form-control col-3" placeholder="People" required=""><input type="number" name="price[]" class="form-control col-3" placeholder="Price (without tk)" required=""></div><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            //$(wrapper).append(fieldHTML); //Add field html
            $(wrapper).append('<div class="form-group col-md-8" style="padding-left: 0"><label>People and Price</label><input type="number" name="people[]" class="form-control" placeholder="People" required=""><br><input type="number" name="price[]" class="form-control" placeholder="Price" required=""><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>');
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
@endforeach

<!-- include libraries(jQuery, bootstrap) -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
    $('#tour_detailsone').summernote();
    $('#tour_detailstwo').summernote();
    
    });
</script>

@foreach($tours as $tour)
<script>
    $(document).ready(function() {
    $('#tour_detailstwo{{$tour->id}}').summernote();
    
    });
</script>
@endforeach
@endsection

      