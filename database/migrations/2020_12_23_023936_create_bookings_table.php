<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guide_user_id');
            $table->string('user_id');
            $table->string('tour_price')->nullable();
            $table->string('tour_date_one')->nullable();
            $table->string('tour_date_two')->nullable();
            $table->string('tour_date_three')->nullable();
            $table->string('tour_date_four')->nullable();
            $table->string('tour_date_five')->nullable();
            $table->string('tour_date_six')->nullable();
            $table->string('tour_date_seven')->nullable();
            $table->string('tour_date_eight')->nullable();
            $table->string('tour_date_nine')->nullable();
            $table->string('tour_date_ten')->nullable();
            $table->string('start_time');
            $table->string('number_of_people');
            $table->string('metting_location');
            $table->string('address_one')->nullable();
            $table->string('map_link_one')->nullable();
            $table->string('airport_two')->nullable();
            $table->string('flight_two')->nullable();
            $table->string('arrival_time_two')->nullable();
            $table->string('hotel_three')->nullable();
            $table->string('name_booked_three')->nullable();
            $table->string('hotel_address_three')->nullable();
            $table->string('address_four_one')->nullable();
            $table->string('address_four_two')->nullable();
            $table->string('address_five_one')->nullable();
            $table->string('address_five_two')->nullable();
            $table->string('address_six_one')->nullable();
            $table->string('address_six_two')->nullable();
            $table->string('tour_details_from')->nullable();
            $table->string('tour_details_to')->nullable();
            $table->string('payment_info_one')->nullable();
            $table->string('payment_info_two')->nullable();
            $table->string('payment_info_three')->nullable();
            $table->string('status')->nullable();
            $table->string('payment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
