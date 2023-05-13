<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HerramientaCarritoResource extends JsonResource
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
            'pedido_id' => $this->pivot->id,
            'herramienta_id' => $this->id,
            'cantidad' => $this->pivot->cantidad,
            'marca' => $this->marca,
            'nombre' => $this->nombre,
            'modelo' => $this->modelo,
            'precio' => $this->precio,
            'descripcion' => $this->descripcion,
            'fotos' => FotosResource::collection($this->fotos)
        ];
    }
}
