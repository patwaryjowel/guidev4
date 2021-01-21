<?php

namespace App\Http\Controllers\guide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guidedetail;
use App\Models\guideapply;
use App\Models\language;
use App\Models\user;
use Str;
use Image;
use delete;

class guideController extends Controller
{




	

public function store(Request $request)
    {
        $data = new guidedetail();
        $data->user_id = $request->user_id;
		$data->city = $request->city;
		$data->country = $request->country;
		$data->biography = $request->biography;
		$data->credentials = $request->credentials;
		$data->guidenumber = $request->guidenumber;
        $data->bangla = $request->bangla;
        $data->english = $request->english;
        $data->arabic = $request->arabic;
        $data->hindi = $request->hindi;
        $data->save();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }



    public function update(Request $request)
    {
        $id = $request->id;
        $data = guidedetail::findorfail($id);
		$data->city = $request->city;
		$data->country = $request->country;
		$data->biography = $request->biography;
		$data->credentials = $request->credentials;
		$data->guidenumber = $request->guidenumber;
        $data->bangla = $request->bangla;
        $data->english = $request->english;
        $data->arabic = $request->arabic;
        $data->hindi = $request->hindi;
        $data->update();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }


      public function show($id)
    {       
        $user = User::find($id);
        //return view('member.memberlist', compact('members'));
        return view('guide.show', compact('user'));
    }


    public function destroy($id)
    {       

        $member = member::find($id);
        $member->delete();
            return redirect()->back();
       
    }



 public function guideapply(){
     return view('front.guide-apply');
 }
 public function guideapplystore(Request $request)
    {

         $validated = $request->validate([
        'password' => 'min:6',
        'confirmPassword' => 'required_with:password|same:password|min:6'
 
    ]);


        $member = new guideapply();
        $member->user_id = $request->user_id;
        $member->prefix = $request->prefix;
        $member->name = $request->name;
        $member->country = $request->country;
        $member->birthday = $request->birthday;
        $member->city = $request->city;
        $member->address = $request->address;
        $member->zip = $request->zip;
        $member->homephone = $request->homephone;
        $member->cellphone = $request->cellphone;
        $member->skypename = $request->skypename;
        $member->contacttime = $request->contacttime;
        $member->licensed = $request->licensed;
        $member->licensedetail = $request->licensedetail;
        $member->detail = $request->detail;
        $member->notes = $request->notes;
        $member->save();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }

public function guideapplyupdate(Request $request)
    {


        $id = $request->id;
        $member = guideapply::findorfail($id);
        $member->prefix = $request->prefix;
        $member->name = $request->name;
        $member->country = $request->country;
        $member->birthday = $request->birthday;
        $member->city = $request->city;
        $member->address = $request->address;
        $member->zip = $request->zip;
        $member->homephone = $request->homephone;
        $member->cellphone = $request->cellphone;
        $member->skypename = $request->skypename;
        $member->contacttime = $request->contacttime;
        $member->licensed = $request->licensed;
        $member->licensedetail = $request->licensedetail;
        $member->detail = $request->detail;
        $member->notes = $request->notes;
        $member->update();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }

    public function userprofileupdate(Request $request)
    {
        $id = $request->id;
        $user = user::findorfail($id);
        $user->prefix= $request->prefix;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->birthday= $request->birthday;
        $user->city= $request->city;
        $user->country= $request->country;
        $user->address= $request->address;
        $user->zip= $request->zip;
        $user->homephone= $request->homephone;
        $user->cellphone= $request->cellphone;
        $user->skypename= $request->skypename;
        $user->contacttime= $request->contacttime;
        $user->licensed= $request->licensed;
        $user->licensedetail= $request->licensedetail;
        $user->detail= $request->detail;
        $user->notes= $request->notes;
        $user->biography= $request->biography;
        $user->credentials= $request->credentials;
        $user->guidenumber= $request->guidenumber;
        $user->stattus= $request->stattus;
        $user->bangla= $request->bangla;
        $user->english= $request->english;
        $user->arabic= $request->arabic;
        $user->hindi= $request->hindi;
        $user->alternate_email_one= $request->alternate_email_one;
        $user->alternate_email_two= $request->alternate_email_two;
        $user->alternate_email_three= $request->alternate_email_three;
        $user->newsletter= $request->newsletter;
        $user->update();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }

 public function personalimageupdate(Request $request)
    {


        /******** image upload start ********/
        $picName = Str::slug($request->name);
        $imageName = $picName.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/user'), $imageName);
       
        /******** image upload end ********/ 
        $id = $request->id;
        $member = user::findorfail($id);
        $member->image = $imageName;
        $member->update();
        return redirect()->back()->with('success','Image uploaded successfully.');
    }





}
