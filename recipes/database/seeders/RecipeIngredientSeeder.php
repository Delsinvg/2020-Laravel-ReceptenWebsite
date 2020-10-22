<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipeingredients')->insert([
            'recipeId' => 1,
            'ingredientId' => 1,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 1,
            'ingredientId' => 2,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 1,
            'ingredientId' => 3,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 1,
            'ingredientId' => 4,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 2,
            'ingredientId' => 1,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 2,
            'ingredientId' => 6,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 3,
            'ingredientId' => 4,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 4,
            'ingredientId' => 1,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 4,
            'ingredientId' => 4,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 5,
            'ingredientId' => 2,
            'quantity' => 100,
        ]);

        DB::table('recipeingredients')->insert([
            'recipeId' => 5,
            'ingredientId' => 5,
            'quantity' => 100,
        ]);
    }
}
