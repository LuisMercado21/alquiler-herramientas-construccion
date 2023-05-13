<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHerremientaRequest;
use App\Http\Resources\HerramientasResource;
use App\Models\Herramientas;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return HerramientasResource::collection(Herramientas::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHerremientaRequest $request)
    {
       $herramienta = Herramientas::create($request->validated());
       return response()->json([
            'message' => 'nueva herramiena guardada',
            'data' => new HerramientasResource($herramienta)
       ], 200);

    }

    /**
     * Display the specified resource.
     */
    public function search($termino)
    {
        $resultados = Herramientas::where('nombre', 'like', '%' . $termino . '%')->get();
        return response()->json([
            HerramientasResource::collection($resultados),
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, herramientas $herramientas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Herramientas $herramienta)
    {
        $herramienta->delete();

        return response()->json([
            'message' => 'herramienta eliminada correctamente'
        ], 200);
    }
}
