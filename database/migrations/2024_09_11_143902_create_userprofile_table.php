<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofile', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');  // Add the user_id foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->id('addressid');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->enum('gender', ["Male", "Female", "Other"]);
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->enum('type', ["Home", "Work", "Other"]);
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
        Schema::dropIfExists('userprofile');
    }
};
