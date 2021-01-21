<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class newAuthController extends Controller
{
    public function store(Request $request)
    {
    	
		/******** image upload start ********/

   

   

        $member = new User();
        
        $member->name = $request->name;
        $member->email = $request->email;
        $member->utype = $request->utype;
        $member->password =  Hash::make($request->password);
        $member->save();
      	return redirect()->route('profile.guide-show')->with('success','Image uploaded successfully.');
    }
}
