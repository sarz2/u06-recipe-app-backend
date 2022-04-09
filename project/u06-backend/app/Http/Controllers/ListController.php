<?php

namespace App\Http\Controllers;

use App\Models\Recipelist;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function create(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'user_id' => 'required', //auth()->user()->id
                ]);
         RecipeList::create($validatedData);
    }

    public function show($user_id){
        $recipeList = Recipelist::find($user_id);
        return $recipeList;
    }

    public function destroy($id){
        $recipeList = RecipeList::find($id);
        $recipeList->delete();
    }
}
