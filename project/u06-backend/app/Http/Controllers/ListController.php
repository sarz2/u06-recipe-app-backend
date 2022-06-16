<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipeListResource;
use App\Http\Resources\RecipeResource;
use App\Models\Recipelist;
use App\Models\Recipe;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class ListController extends Controller
{
    public function create(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'email' => 'required', 
                ]);
         Recipelist::create($validatedData);
         return response([
            "message" => "List created"
        ], 201);
    }

    public function show(){
        return RecipeListResource::collection(RecipeList::all());
    }

    public function showOneList($id){
         return Recipe::where('list_id', $id)->get();
        
    }

    public function destroy(Request $request){
        RecipeList::where('id', $request->id)->delete();
        return RecipeListResource::collection(RecipeList::all());
        return response([
            "message" => "List deleted"
        ], 201);
    }


}
