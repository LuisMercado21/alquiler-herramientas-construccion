<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HerramientasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        
        return [
            'id' => $this->id,
            'marca' => $this->marca,
            'nombre' => $this->nombre,
            'modelo' => $this->modelo,
            'precio' => $this->precio,
            'descripcion' => $this->descripcion,
            'fotos' => FotosResource::collection($this->fotos)
        ];
    }
}
