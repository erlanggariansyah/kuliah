<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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

Route::post("login", [AuthController::class, "login"]);
Route::post("register", [AuthController::class, "register"]);

Route::middleware('auth:sanctum')->group(function() {
    Route::get("animals", [AnimalController::class, "index"]);
    Route::post("animals", [AnimalController::class, "add"]);
    Route::get("animals/{index}", [AnimalController::class, "get_by_index"]);
    Route::put("animals/{index}", [AnimalController::class, "update"]);
    Route::delete("animals/{index}", [AnimalController::class, "delete"]);

    Route::get("students", [StudentController::class, "index"]);
    Route::post("students", [StudentController::class, "store"]);
    Route::get("students/{id}", [StudentController::class, "show"]);
    Route::put("students/{id}", [StudentController::class, "update"]);
    Route::delete("students/{id}", [StudentController::class, "delete"]);
});
