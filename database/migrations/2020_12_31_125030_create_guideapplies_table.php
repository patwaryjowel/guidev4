<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideappliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guideapplies', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('prefix');
            $table->string('name');
            $table->string('country');
            $table->string('birthday');
            $table->string('city');
            $table->string('address');
            $table->string('zip');
            $table->string('homephone');
            $table->string('cellphone');
            $table->string('skypename');
            $table->string('contacttime')->nullable();
            $table->string('licensed')->nullable();
            $table->longtext('licensedetail')->nullable();
            $table->longtext('detail');
            $table->longtext('notes');
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
        Schema::dropIfExists('guideapplies');
    }
}
