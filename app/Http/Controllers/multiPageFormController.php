<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\tour;
use App\Models\User;
use App\Models\Order;
use App\Models\testimonial;
use App\Models\booking;
use App\Library\SslCommerz\SslCommerzNotification;
use Str;
use Image;
use delete;
use Hash;
use Illuminate\Support\Facades\Auth;





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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }


        }


$booking = new booking();


 if (!empty($request->user_id)) {
           $booking->user_id = $request->user_id;
        }else{
$booking->user_id =  $user->id;
        }

$selected_dates = array_unique(explode(',',$request->selected_dates));

$unqe_dates = implode(',',$selected_dates);




$booking->guide_user_id = $request->guide_user_id;
$booking->tour_id = $request->tour_id;
$booking->tour_date_one = $unqe_dates;
$booking->tour_price = $request->tour_price;
$booking->start_time = $request->start_time;
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

$total_price = $request->total_amount * count($selected_dates) + .00;

$tran_id = uniqid();
$order = new Order;
$order->booking_id = $booking->id;
$order->transaction_id = $tran_id;
$order->save();
				//sslcommerze payment gateway start
						
                    $post_data = array();
                    $post_data['total_amount'] = $total_price; # You cant not pay less than 10
                    $post_data['currency'] = "USD";
                    $post_data['tran_id'] = $tran_id; // tran_id must be unique

                    # CUSTOMER INFORMATION
                    $post_data['cus_name'] = 'Name';
                    $post_data['cus_email'] = 'customer@mail.com';
                    $post_data['cus_add1'] = 'Customer Address';
                    $post_data['cus_add2'] = "";
                    $post_data['cus_city'] = "";
                    $post_data['cus_state'] = "";
                    $post_data['cus_postcode'] = "";
                    $post_data['cus_country'] = "Bangladesh";
                    $post_data['cus_phone'] = '01795365429';
                    $post_data['cus_fax'] = "";

                    # SHIPMENT INFORMATION
                    $post_data['ship_name'] = "Store Test";
                    $post_data['ship_add1'] = "Dhaka";
                    $post_data['ship_add2'] = "Dhaka";
                    $post_data['ship_city'] = "Dhaka";
                    $post_data['ship_state'] = "Dhaka";
                    $post_data['ship_postcode'] = "1000";
                    $post_data['ship_phone'] = "";
                    $post_data['ship_country'] = "Bangladesh";

                    $post_data['shipping_method'] = "NO";
                    $post_data['product_name'] = "Computer";
                    $post_data['product_category'] = "Goods";
                    $post_data['product_profile'] = "physical-goods";

                    # OPTIONAL PARAMETERS

                    $post_data['value_a'] = "ref001";
                    $post_data['value_b'] = "ref002";
                    $post_data['value_c'] = "ref003";
                    $post_data['value_d'] = "ref004";


                    $sslc = new SslCommerzNotification();
                    # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
                    $payment_options = $sslc->makePayment($post_data, 'hosted');



//return redirect()->back()->with('success','Image uploaded successfully.');
    }








}


