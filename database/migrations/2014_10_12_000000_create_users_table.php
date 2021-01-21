<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('prefix')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('utype')->nullable();
            $table->string('country')->nullable();
            $table->string('birthday')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('tour_place_id')->nullable();
            $table->string('token')->nullable();
            $table->string('homephone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('skypename')->nullable();
            $table->string('contacttime')->nullable();
            $table->string('licensed')->nullable();
            $table->longtext('licensedetail')->nullable();
            $table->longtext('detail')->nullable();
            $table->longtext('notes')->nullable();
            $table->string('biography')->nullable();
            $table->longtext('credentials')->nullable();
            $table->string('guidenumber')->nullable()->unique();
            $table->string('stattus')->nullable();
            $table->string('bangla')->comment('language')->nullable();
            $table->string('english')->comment('language')->nullable();
            $table->string('arabic')->comment('language')->nullable();
            $table->string('hindi')->comment('language')->nullable();
            $table->string('alternate_email_one')->nullable();
            $table->string('alternate_email_two')->nullable();
            $table->string('alternate_email_three')->nullable();
            $table->string('newsletter')->nullable();
            $table->string('location_id')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('users');
    }
}
