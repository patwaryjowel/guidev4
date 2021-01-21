<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guidedetails', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('city');
            $table->string('country');
            $table->string('biography');
            $table->longtext('credentials');
            $table->string('guidenumber');
            $table->string('bangla')->comment('language')->nullable();
            $table->string('english')->comment('language')->nullable();
            $table->string('arabic')->comment('language')->nullable();
            $table->string('hindi')->comment('language')->nullable();
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
        Schema::dropIfExists('guidedetails');
    }
}
