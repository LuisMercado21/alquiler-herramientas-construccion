<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFotoRequest;
use App\Http\Resources\FotosResource;
use App\Models\Foto;
use App\Models\Herramientas;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Foto::findOrFail();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFotoRequest $request, $id)
    {
        
        
        $herramienta = Herramientas::findOrFail($id);
        
        
        $foto = new Foto(['src' => $request->validated()['src']]);

        $fotoSaved = $herramienta->fotos()->save($foto);

        return response()->json([
            'message' => 'Comentario guardado correctamente',
            'data' => new FotosResource($fotoSaved)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        //
    }
}
