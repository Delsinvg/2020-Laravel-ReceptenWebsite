<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\RecipeIngredients;

class RecipeController extends Controller
{
    public function index() {
        $recipes = Recipe::where('visible', true)->simplePaginate(6);
        return view('recipes', ['recipes' => $recipes]);
    }

    public function show($id) {
        $recipe = Recipe::with('ingredient')->where('visible', true)->findOrFail($id);
        $categoryId = $recipe->category->id;
        $randomRecipes = Recipe::where('id', '!=', $id)->where('categoryId', $categoryId)->where('visible', true)->distinct('name')->inRandomOrder()->limit(4)->get();
        return view('recipedetails', ['recipe' => $recipe, 'randomRecipes' => $randomRecipes]);
    }
}
