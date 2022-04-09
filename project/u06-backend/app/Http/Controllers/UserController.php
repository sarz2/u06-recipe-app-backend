<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Respond;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function register(Request $request){

        $fields = $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);


        $user = User::create([
            'name' => $fields['username'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])

        ]);

        $token = $user->createToken('recipeapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

    }

    public function login(Request $request){ 
        $fields = $request->validate([
        'email' => 'required|string',
        'password' => 'required|string'
    ]);

    //check email

    $user = User::where('email', $fields['email'])->first();

    //check password
    if(!$user || !Hash::check($fields['password'], $user->password)){
        return response([
            "message" => "Bad credentials"
        ], 401);
    }

    $token = $user->createToken('recipeapptoken')->plainTextToken;

    $response = [
        'user' => $user,
        'token' => $token
    ];

    return response($response, 201);


}

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return response([
            'message'=> 'logged out'
        ], 401);
    }
}
