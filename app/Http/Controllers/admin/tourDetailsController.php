<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tour;

class tourDetailsController extends Controller
{
   public function index($id)
    {

    	 $member = tour::find($id);
        /*$sliders = slider::where('status', 1)->get();
        $tours = tour::where('status', 1)->get();*/
        return view('front.single-tour-details', compact('member'));
    }

   
}
