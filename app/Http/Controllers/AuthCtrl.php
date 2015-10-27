<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class SessionsCtrl extends Controller
{
    public function index()
    {
        // Auth users
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // if no errors, return the JWT
        return response()->json(compact('token'));
    }

    public function login()
    {

    }

    public function register()
    {

    }

    public function logout()
    {

    }
}
