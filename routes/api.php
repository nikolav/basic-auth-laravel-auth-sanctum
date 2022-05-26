<?php

use App\Http\Controllers\AppDataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
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
    return [
        "app.id"      => env("APP_ID"),
        "app.name"    => env("APP_NAME"),
        "app.version" => "0.0.0",
        "app.git"     => env("APP_GITHUB")
    ];
});

//
Route::get("appdata", [AppDataController::class, "index"]);
Route::get("appdata/name/{name}", [AppDataController::class, "byName"]);
Route::get("appdata/{appData}", [AppDataController::class, "show"]);
// Route::post("appdata", [AppDataController::class, "store"]);
// Route::patch("appdata/{appData}", [AppDataController::class, "update"]);
// Route::delete("appdata/{appData}", [AppDataController::class, "destroy"]);

//
Route::apiResource("messages", MessagesController::class);

//
Route::post("/register", [AuthController::class, "register"]);
Route::post("/authenticate", [AuthController::class, "authenticate"]);

//
Route::post("/send-email", [EmailController::class, "sendEmail"]);
//
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(["middleware" => ["auth:sanctum"]], function () {
    Route::get("/user", function (Request $req) {
        return $req->user();
    });
    //
    Route::post("/logout", [AuthController::class, "logout"]);
    //
    //
    Route::post("appdata", [AppDataController::class, "store"]);
    Route::patch("appdata/{appData}", [AppDataController::class, "update"]);
    Route::delete("appdata/{appData}", [AppDataController::class, "destroy"]);
});
