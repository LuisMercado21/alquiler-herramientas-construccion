<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
        
        $credintials = $request->validated();

        if(Auth::attempt($credintials)){

            $user = $request->user();

            return response()->json([
                new UserResource($user),
            ], 200);
        }

        return response()->json([
            'message' => '¡credenciales incorrectas!'
        ], 401);
    }

    public function logout(Request $request){
        
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'logged out successfully'
        ], 200);
    }
}
