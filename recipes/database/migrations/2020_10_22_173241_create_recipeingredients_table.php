<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeingredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipeingredients', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->foreignId('recipeId')->constrained('recipes')
                ->onDelete('cascade');
            $table->foreignId('ingredientId')->constrained('ingredients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipeingredients');
    }
}
