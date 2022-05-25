<?php

use App\Http\Controllers\AppDataController;
use App\Http\Controllers\MessagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/", function () {
    return response(env("APP_ID"), 200, [
        "Content-Type" => "text/plain"
    ]);
});

//
Route::get("appdata", [AppDataController::class, "index"]);
Route::get("appdata/name/{name}", [AppDataController::class, "byName"]);
Route::get("appdata/{appData}", [AppDataController::class, "show"]);
Route::post("appdata", [AppDataController::class, "store"]);
Route::patch("appdata/{appData}", [AppDataController::class, "update"]);
Route::delete("appdata/{appData}", [AppDataController::class, "destroy"]);

//
Route::apiResource("messages", MessagesController::class);

//
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
