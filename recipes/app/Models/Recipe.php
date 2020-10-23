<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable = ['name', 'imagePath', 'description', 'cookingTime', 'visible', 'categoryId'];

    public function ingredient()
    {
        return $this->belongsToMany('App\Models\Ingredient', 'recipeingredients', 'recipeId', 'ingredientId');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categoryId');
    }


}
