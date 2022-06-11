<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    protected $fillable =[

        'title',
        'image',
        'ingredientLines',
        'SELFREF',
        'list_id'
    ];

    function recipeList(){

        return $this->hasMany(Recipelist::class);
    }

}
