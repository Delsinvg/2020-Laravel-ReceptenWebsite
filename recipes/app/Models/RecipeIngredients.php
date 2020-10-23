<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeIngredients extends Model
{
    protected $table = 'recipeingredients';
    protected $fillable = ['recipeId', 'ingredientId', 'quantity'];
}
