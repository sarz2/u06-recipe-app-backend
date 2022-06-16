<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeList extends Model
{
    use HasFactory;

    protected $table = 'recipelist';

    protected $fillable = [
        'id',
        'title',
        'email'
    ];

    public function user(){
        
        return $this->hasMany(User::class);
    }
}
