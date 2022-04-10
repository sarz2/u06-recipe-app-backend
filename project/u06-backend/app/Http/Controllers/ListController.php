<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipeListResource;
use App\Models\Recipelist;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function create(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'email' => 'required', //auth()->user()->id
                ]);
         RecipeList::create($validatedData);
    }

    public function show(){
        return RecipeListResource::collection(RecipeList::all());
    }

    public function destroy($id){
        $recipeList = RecipeList::find($id);
        $recipeList->delete();
    }
}
