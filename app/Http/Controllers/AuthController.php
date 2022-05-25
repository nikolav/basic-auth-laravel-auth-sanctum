<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

//
class AuthController extends Controller
{
    //
    public function register(Request $req)
    {
        $input = $req->validate([
            "name"     => "required",
            "email"    => "required|email|unique:users,email",
            // gotta pass matching `password_confirmation` to pass `confirmed` check
            "password" => "required|confirmed"
        ]);
        $user = User::create([
            "name"     => $input["name"],
            "email"    => $input["email"],
            "password" => bcrypt($input["password"])
        ]);
        //
        $token = $user->createToken(env("APP_ID") .".". $user->id);
        //
        return response([
            "data" => [
                "user"  => $user,
                "token" => $token->plainTextToken,
            ]
        ], 201);
    }

    //
    public function authenticate(Request $req)
    {
        $input = $req->validate([
            "email"    => "required",
            "password" => "required",
        ]);

        // find by unique `email`
        $user  = User::where("email", $input["email"])->first();
        $token = null;
        //
        if ($user) {
            // verify hashed password
            if (Hash::check($input["password"], $user->password)) {
                $token = $user->createToken(env("APP_ID") .".". $user->id);
                return [
                    "data" => [
                        "user"  => $user,
                        "token" => $token->plainTextToken,
                    ]
                ];
            }
        }

        // else 401 Unauthorized
        return response([
            "data" => [
                "message" => "Unauthorized Credentials"
            ]
        ], 401);
    }

    //
    public function logout (Request $req) {
        auth()->user()->tokens()->delete();
        return response([
            "data" => [
                "message" => "success"
            ]
        ], 200);
    }
}
