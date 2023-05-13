<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsuario(Request $request){
        
        $user = $request->user();

        $carrito = $user->carrito;

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'carrito' => $carrito->herramientas()->count(),
        ], 200);
    }
}
