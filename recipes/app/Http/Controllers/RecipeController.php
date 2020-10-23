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
        $recipe = Recipe::with('ingredient')->findOrFail($id);
        return view('recipedetails', ['recipe' => $recipe]);
    }
}
