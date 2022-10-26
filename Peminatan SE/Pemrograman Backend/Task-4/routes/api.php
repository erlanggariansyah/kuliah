<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::get("animals", [AnimalController::class, "index"]);
Route::post("animals", [AnimalController::class, "add"]);
Route::get("animals/{index}", [AnimalController::class, "get_by_index"]);
Route::put("animals/{index}", [AnimalController::class, "update"]);
Route::delete("animals/{index}", [AnimalController::class, "delete"]);
