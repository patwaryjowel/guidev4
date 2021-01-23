<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\tour;
use App\Models\User;
use App\Models\testimonial;
use App\Models\location;
use App\Models\guideapply;
use App\Models\booking;
use App\Models\Package;
use Str;
use Image;
use delete;

class adminController extends Controller
{

     public function index()

    {
       

        return view('backend.index');

    }


     public function slider()

    {
        $sliders  = slider::all();

        return view('backend.manage-slider', compact('sliders'));

    }

  public function addlocation()

    {
      

        return view('backend.add-location');

    }



   public function locationstore(Request $request)
    {
        


        $validated = $request->validate([
        'location' => 'required',
        'heading' => 'required',
        'subheading' => 'required',
        'title' => 'required',
        'details' => 'required',
        'image' => 'required',
 
    ]);
        /******** image upload start ********/

        $picName = Str::slug($request->location);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/location'), $imageName);
        /******** image upload end ********/  

    


   

        $member = new location();
        $member->location = $request->location; 
        $member->heading = $request->heading;
        $member->subheading = $request->subheading;
        $member->title = $request->title;
        $member->details = $request->details;
        $member->image = $imageName;
        $member->save();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }

public function locationupdate(Request $request)
    {
        $id = $request->id;
         $member = location::findorfail($id);
        if (!empty($request->image)) {
            $picName = Str::slug($request->location);
            $imageName = $picName.'-'.time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images/location'), $imageName);
            $member->image = $imageName;
        }
        $member->location = $request->location; 
        $member->heading = $request->heading;
        $member->subheading = $request->subheading;
        $member->title = $request->title;
        $member->details = $request->details;
       
        $member->update();
        return redirect()->back()->with('success','Image uploaded successfully.');

 
    }

public function locationdestroy($id)
    {       

        $member = location::find($id);
        $member->delete();
            return redirect()->back();
       
    }




 
public function store(Request $request)
    {
    	

         $validated = $request->validate([
        'title' => 'required',
        'image' => 'required',
    ]);
		/******** image upload start ********/

    	$picName = Str::slug($request->title);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/gallery'), $imageName);
		/******** image upload end ********/  

        $member = new slider();
        
        $member->title = $request->title;
        $member->image = $imageName;
        $member->status = 1;
        $member->created_at = date("Y/m/d");
        $member->updated_at = date("Y/m/d");
        $member->save();
      	return redirect()->back()->with('success','Image uploaded successfully.');
    }

 

public function show($id)
    {       
       

       
         $member = slider::find($id);
        return view('backend.edit-slider', compact('member'));
    }




public function update(Request $request)
    {
        /*$data = $this->validate($request,[
            "title"=>"required|unique:categories,title",
            "title.required"=>"Please enter category title !",
            "title.unique" => "This Category name is already exist !"
        ]);*/

        /******** image upload start ********/




      

        $id = $request->id;
        $data = slider::findorfail($id);
       
       
       if (!empty($request->image)) {
        $picName = Str::slug($request->title);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/gallery'), $imageName);
         $data->image = $imageName;
        }

        $data->title = $request->title;
       
        $data->update();
      //  Session::flash('success','Updated Successfully !');
     //   return redirect ('category');
        return redirect()->back()->with('success','Image uploaded successfully.');
    }






 public function destroy($id)
    {       

        $member = slider::find($id);
        $member->delete();
            return redirect()->back();
       
    }









    //edited start

     public function tourplacearea()
    {
    $locations = Location::all();
    $tours = tour::all();
        return view('backend.manage-tours-place' ,compact('tours','locations'));
    }



    // tour place filter by district.

    public function filterbydistrict($id)
    {
        $locations = Location::all();
        $filter_location = Location::find($id);
       $tours = Tour::where('location_id', $id)->get();
        return view('backend.manage-tours-place' ,compact('tours','filter_location'));
    }

    //edited end





    public function tourplacestore(Request $request)
    {
    $validated = $request->validate([
        'title' => 'required',
        'image' => 'required',
        'details' => 'required',
        'location_id' => 'required',
        'guide_id' => 'required',
        'map_link' => 'required',
 
    ]);

        
        /******** image upload start ********/

        $picName = Str::slug($request->title);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/tour-place'), $imageName);
        /******** image upload end ********/  

    

        $member = new tour();
        
        $member->slug = Str::slug($request->title);
        $member->title = $request->title;
        $member->image = $imageName;
        $member->details = $request->details;
        $member->location_id = $request->location_id;
        $member->guide_id = $request->guide_id;
        $member->map_link = $request->map_link;
        $member->people = implode(',',$request->people);
        $member->price = implode(',',$request->price);



        $member->status = 1;
        $member->created_at = date("Y/m/d");
        $member->updated_at = date("Y/m/d");
        $member->save();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }




     public function testimonial()
    {

        $testimonials = testimonial::all();

        return view('backend.manage-testimonial', compact('testimonials'));
    }



    public function testimonialstore(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required',
        'detail' => 'required',
        'image' => 'required',
        'email' => 'required',
        'date' => 'required',
          
    ]);
       
         /******** image upload start ********/

        $picName = Str::slug($request->name);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/testimonial'), $imageName);
        /******** image upload end ********/  

        $member = new testimonial();
        $member->name = $request->name;
        $member->detail = $request->detail;
        $member->image = $imageName;
        $member->email = $request->email;
        $member->date = $request->date;
        $member->created_at = date("Y/m/d");
        $member->updated_at = date("Y/m/d");
        $member->save();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }

 public function testimonialdestroy($id)
    {       

        $member = testimonial::find($id);
        $member->delete();
            return redirect()->back();
       
    }

public function testimonialupdate(Request $request)
    {
        /*$data = $this->validate($request,[
            "title"=>"required|unique:categories,title",
            "title.required"=>"Please enter category title !",
            "title.unique" => "This Category name is already exist !"
        ]);*/

        /******** image upload start ********/

      

         $id = $request->id;
         $data = testimonial::findorfail($id);

  if (!empty($request->image)) {
 $picName = Str::slug($request->name);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
         $request->image->move(public_path('assets/images/testimonial'), $imageName);
     $data->image = $imageName;
  }

       
       
        /******** image upload end ********/  
       // $input = $request->title;
        $data->name = $request->name;
        $data->detail = $request->detail;
        $data->email = $request->email;
        $data->date = $request->date;
       
      
        
        $data->update();
      //  Session::flash('success','Updated Successfully !');
     //   return redirect ('category');
        return redirect()->back()->with('success','Image uploaded successfully.');
    }






 public function tourplacedestroy($id)
    {       

        $member = tour::find($id);
        $member->delete();
            return redirect()->back();
       
    }


public function manageguide()
    {       

      
        $guideapplies  = guideapply::get();
        return view('backend.manageguide', compact('guideapplies'));
       
    }



public function manageguidefortour($id)
    {       
 $member = tour::find($id);
      
        $guideapplies  = guideapply::get();
        return view('backend.manageguidefortour', compact('member', 'guideapplies'));
       
    }

public function approveguide(Request $request){


 

        $id = $request->id;
        $lid = $request->location_id;
        $user = User::findorfail($id);
        $location = location::findorfail($lid);
        $user->status = 1;
        $user->location_id = $request->location_id;
        $user->location = $location->location;
        $user->guidenumber = $request->guidenumber;
        $user->update();
        return redirect()->back()->with('success','Image uploaded successfully.');

}


public function approvetourguide(Request $request){
        $id = $request->id;
        $tour = tour::findorfail($id);
        $tour->guide_id = $request->guide_id;
        $tour->update();
        return redirect()->back()->with('success','Image uploaded successfully.');

}



      public function guideshow($id)
    {       
        $user = User::find($id);
        //return view('member.memberlist', compact('members'));
        return view('backend.guideshow', compact('user'));
    }


    public function guidedestroy($id)
    {       

        $member = User::find($id);
        $member->delete();
            return redirect()->back();
       
    }

//


    public function manageorder()
    {       

      
        
        return view('backend.manageorder');
       
    }

    public function approveorder(Request $request){


 

        $id = $request->id;
        $booking = booking::findorfail($id);
        $booking->status = 1;
        $booking->update();
        return redirect()->back()->with('success','Image uploaded successfully.');

}

public function approvepayment(Request $request){
        $id = $request->id;
        $booking = booking::findorfail($id);
        $booking->payment = 1;
        $booking->update();
        return redirect()->back()->with('success','Image uploaded successfully.');

}



      public function ordershow($id)
    {       
        $booking = booking::find($id);
        //return view('member.memberlist', compact('members'));
        return view('backend.ordershow', compact('booking'));
    }


    public function orderdestroy($id)
    {       

        $member = booking::find($id);
        $member->delete();
            return redirect()->back();
       
    }

//


public function tourplaceupdate(Request $request)
    {
       
         $id = $request->id;
         $data = tour::findorfail($id);

        if (!empty($request->image)) {
        $picName = Str::slug($request->title);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/tour-place'), $imageName);
        $data->image = $imageName;
        }


       
        $data->people = implode(',',$request->people);
        $data->price = implode(',',$request->price);

        $data->title = $request->title;
        $data->location_id = $request->location_id;
      
        
        $data->update();
      //  Session::flash('success','Updated Successfully !');
     //   return redirect ('category');
       
     return redirect()->back()->with('success','Image uploaded successfully.');
    }

    public function managepackage() {
        $packages = Package::all();
        return view('backend.manage-package',compact('packages'));
    }















}
