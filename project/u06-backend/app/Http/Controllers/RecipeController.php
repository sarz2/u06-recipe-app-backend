<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function store(Request $request){
        $recipe = Recipe::create(
            [
                'SELFREF' =>$request->id,
                'title'=> $request->title,
                'image' => $request->image,
                'ingredientLines' =>$request->ingredientLines
            ]
            );
        }
}
