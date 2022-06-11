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
            'email' => 'required', 
                ]);
         RecipeList::create($validatedData);
         return response([
            "message" => "List created"
        ], 201);
    }

    public function show(){
        return RecipeListResource::collection(RecipeList::all());
    }

    public function destroy(Request $request){
        RecipeList::where('id', $request->id)->delete();
        return RecipeListResource::collection(RecipeList::all());
        return response([
            "message" => "List deleted"
        ], 201);
    }
}
