<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable = ['name', 'imagePath', 'description', 'cookingTime', 'visible', 'categoryId'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categoryId');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Orders', 'recipeingredients', 'ingredientId', 'recipeId');
    }
}
