<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class SessionsCtrl extends Controller
{
    private $jwt_auth;

    /**
     * SessionsCtrl constructor.
     * @param JWTAuth $jwt_auth
     */
    public function __construct(JWTAuth $jwt_auth)
    {
        $this->jwt_auth = $jwt_auth;
    }

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

    public function login(Request $req)
    {
        // extract credentials
        $credentials = $req->only('email', 'password');

        try {
            if (! $token = $this->jwt_auth->attempt($credentials))
                return response()->json(['error' => 'invalid_credentials'], 401);
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request, User $user)
    {
        $attributes = $request->only(['email', 'password', 'username']);

        if ($user->findByUsername($attributes['username']))
            return response()->json(['error' => 'name already taken']);
        return response()->json(['success' => 'yay']);
    }

    public function logout()
    {

    }
}
