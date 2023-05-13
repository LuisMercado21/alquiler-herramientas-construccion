<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function herramientas(){
        return $this->belongsToMany(Herramientas::class, 'herramienta_carritos', 'carrito_id', 'herramienta_id')->withPivot('cantidad', 'id');
    }
}
