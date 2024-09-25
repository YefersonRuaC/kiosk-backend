<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    use HasApiTokens;
    
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return response([
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ], Response::HTTP_CREATED);
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if(!Auth::attempt($data)) {
            return response([
                'errors' => ['Not valid credentials']
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('cookie_token', $token, 60 * 24);

        return response([
            'token' => $token,
            'user' => $user
        ], Response::HTTP_OK)->withCookie($cookie);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        $cookie = cookie('cookie_token', '', -1);

        return response([
            'user' => null
        ], Response::HTTP_OK)->withCookie($cookie);
    }

    public function admin()
    {
        $user = Auth::user();

        if(!$user || $user->admin != 1) {
            return response([
                'error' => 'Not valid action'
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response([
            'user' => $user
        ], Response::HTTP_OK);
    }
}
