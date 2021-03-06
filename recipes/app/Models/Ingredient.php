<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
    protected $fillable = ['name', 'unit'];

    public function recipe()
    {
        return $this->belongsToMany('App\Models\Recipe', 'recipeingredients', 'ingredientId', 'recipeId');
    }
}
