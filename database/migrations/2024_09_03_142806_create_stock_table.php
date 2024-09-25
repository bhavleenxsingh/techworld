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
        Schema::create('stock', function (Blueprint $table) {
            $table->id('productid');
            $table->string('name');
            $table->string('image');
            $table->enum('category', ["Keyboard", "Mouse", "Storage Cards", "Cable", "Combo", "Other"]);
            $table->string('tagline');
            $table->text('description');
            $table->integer('quantity');
            $table->float('mrp');
            $table->integer('discount');
            $table->float('price');
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
        Schema::dropIfExists('stock');
    }
};
