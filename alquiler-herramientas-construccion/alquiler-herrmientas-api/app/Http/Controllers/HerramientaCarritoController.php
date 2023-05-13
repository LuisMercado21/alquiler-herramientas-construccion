<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\HerramientaCarrito;
use App\Models\Herramientas;
use Illuminate\Http\Request;

class HerramientaCarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $idHerramienta)
    {
        $user = $request->user();
        
        $carrito = $user->carrito;

        Herramientas::findOrFail($idHerramienta);

        $carrito->herramientas()->attach($idHerramienta, ['cantidad' => 1] );

        return response()->json([
            'data' => $carrito->herramientas,
            'message' => 'herramienta agregada al carrito'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(HerramientaCarrito $herramientaCarrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HerramientaCarrito $herramientaCarrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HerramientaCarrito $herramientaCarrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $herramientaCarrito = HerramientaCarrito::findOrFail($id);
        $herramientaCarrito->delete();

        return response()->json([
            'message' => 'herramienta eliminada del carrito correctamente'
        ], 200);
    }
}
