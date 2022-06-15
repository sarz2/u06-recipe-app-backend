<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function store(Request $request){
        Recipe::create(
            [
                'title'=> $request->title,
                'image' => $request->image,
                'ingredientLines' =>$request->ingredients,
                'SELFREF' =>$request->recipe_id,
                'list_id' => $request->id,

            ]
            );
        }


        public function removeRecipe(Request $request){
            Recipe::where('id', $request->id)->delete();
        }
}
