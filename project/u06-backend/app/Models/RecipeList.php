<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipelist extends Model
{
    use HasFactory;

    protected $table = 'recipelist';

    protected $fillable = [
        'id',
        'title',
        'user_id'
    ];

    public function user(){
        
        return $this->hasMany(User::class);
    }
}
