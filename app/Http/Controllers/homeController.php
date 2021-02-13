<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\tour;

class homeController extends Controller
{
     public function index()
    {
        $sliders = slider::where('status', 1)->get();
        $tours = tour::where('status', 1)->paginate(9);
        return view('front.index', compact('sliders', 'tours'));
    }
}
