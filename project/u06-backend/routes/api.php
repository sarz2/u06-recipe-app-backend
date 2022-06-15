<?php

use App\Http\Controllers\ListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']],  function () {
    Route::post('destroy', [ListController::class, 'destroy']);
    Route::post('addtolist', [RecipeController::class, 'store']);
    Route::post('createlist', [ListController::class, 'create']);
    Route::get('showlists', [ListController::class, 'show']);
    Route::get('showlist/{id}', [ListController::class, 'showOneList']);
    Route::post('removerecipe', [RecipeController::class, 'removeRecipe']);

});
