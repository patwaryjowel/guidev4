<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\tour;
use App\Models\User;
use App\Models\testimonial;
use App\Models\booking;
use Str;
use Image;
use delete;
use Hash;





class multiPageFormController extends Controller
{
    public function index($id)
    {
         $member = tour::find($id);
    	 return view('front.multi-page-form', compact('member'));
    }





 public function store(Request $request)
    {
        
     
   
        
      $validated = $request->validate([
		'start_time' => 'required',
		'number_of_people' => 'required',
		'metting_location' => 'required',
		'tour_details_from' => 'required',
		'tour_details_to' => 'required', 
        
    ]);
        
if (empty($request->user_id)) {
    $validated = $request->validate([
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => 'required',
           'password_confirmation' => 'required_with:password|same:password|min:6',
            ]);
        }     


if (empty($request->user_id)) {
            $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->utype = 'user';
        $user->token = $request->password;
        $user->country = $request->country;
        $user->alternate_email_one = $request->alternate_email_one;
        $user->alternate_email_two = $request->alternate_email_two;
        $user->alternate_email_three = $request->alternate_email_three;
        $user->newsletter = $request->newsletter;
        $user->save();
        }


$booking = new booking();


 if (!empty($request->user_id)) {
           $booking->user_id = $request->user_id;
        }else{
$booking->user_id =  $user->id;
        }




$booking->guide_user_id = $request->guide_user_id;
$booking->tour_date_one = '01/19/2021';
$booking->tour_date_two = '01/20/2021';
$booking->tour_price = $request->tour_price;
$booking->start_time = $request->start_time;
$booking->number_of_people = $request->number_of_people;
$booking->metting_location = $request->metting_location;
$booking->address_one = $request->address_one;
$booking->map_link_one =  $request->map_link_one;
$booking->airport_two = $request->airport_two;
$booking->flight_two = $request->flight_two;
$booking->arrival_time_two = $request->arrival_time_two;
$booking->hotel_three = $request->hotel_three;
$booking->name_booked_three = $request->name_booked_three;
$booking->hotel_address_three = $request->hotel_address_three;
$booking->address_four_one = $request->address_four_one;
$booking->address_four_two = $request->address_four_two;
$booking->address_five_one = $request->address_five_one;
$booking->address_five_two = $request->address_five_two;
$booking->address_six_one = $request->address_six_one;
$booking->address_six_two = $request->address_six_two;
$booking->tour_details_from = $request->tour_details_from;
$booking->tour_details_to = $request->tour_details_to;
$booking->payment_info_one = $request->payment_info_one;
$booking->payment_info_two = $request->payment_info_two;
$booking->payment_info_three = $request->payment_info_three;
$booking->created_at = date("Y/m/d");
$booking->updated_at = date("Y/m/d");
$booking->save();
return redirect()->back()->with('success','Image uploaded successfully.');
    }








}


