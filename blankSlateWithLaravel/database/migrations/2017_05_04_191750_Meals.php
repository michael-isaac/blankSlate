<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Meals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Meals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipeID');
            $table->integer('userID');
            $table->dateTime('addedToCart');
            $table->dateTime('removedFromCartTime');
            $table->boolean('removedFromCartBool');
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
        //
        Schema::dropIfExists('Meals');
    }
}
