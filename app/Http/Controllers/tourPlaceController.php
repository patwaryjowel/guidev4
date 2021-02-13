<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\tour;
use App\Models\location;

class tourPlaceController extends Controller
{
      public function index($id)
    {
        $tours = tour::where('location_id', $id)->paginate(8);
        $location = location::where('id', $id)->first();
        return view('front.tour-place', compact('tours', 'location'));
    }
}
