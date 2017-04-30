<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('RecipeIngredients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('descrition');
            $table->integer('recipeID');
            $table->integer('ingredientID');
            $table->decimal('amount');
            $table->text('measurment');
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
        Schema::dropIfExists('RecipeIngredients');
    }
}
