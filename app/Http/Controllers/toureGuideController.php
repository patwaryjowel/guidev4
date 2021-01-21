<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\language;
use App\Models\guidedetail;
use App\Models\tour;
use App\Models\user;
use App\Models\location;

class toureGuideController extends Controller
{
      public function index($id)
    {
        $languages = language::where('user_id', $id)->get();
        $user = user::where('id', $id)->first();
        $guidedetail = guidedetail::where('user_id', $id)->first();
        return view('front.single-guide-details', compact('languages', 'user', 'guidedetail'));
    }
}
