<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarritoResource;
use App\Models\Carrito;
use App\Models\Herramientas;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->user();

        $user->carrito()->save(new Carrito());
        
        $savedCarrito = $user->carrito;

        return response()->json([
            'id' => $savedCarrito,
            'message' => 'carrito creado exitosamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = $request->user();
        return response()->json(
            new CarritoResource($user->carrito)
        , 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        //
    }
}
