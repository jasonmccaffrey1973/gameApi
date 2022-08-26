<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('characters', CharacterController::class);
Route::get('/characters/search/{name}', [CharacterController::class, 'search']);
Route::get('/user-characters/userId}', [CharacterController::class, 'userCharacter']);
Route::get('/character/meta/{id}', [CharacterController::class, 'characterMeta']);
Route::get('/character/meta/{id}/{key}', [CharacterController::class, 'characterSingleMeta']);

