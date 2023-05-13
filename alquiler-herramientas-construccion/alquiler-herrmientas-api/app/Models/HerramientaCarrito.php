<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HerramientaCarrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'carrito_id',
        'herramienta_id',
        'cantidad'
    ];

    

    /*public function carrito(){
        return $this->belongsTo(Carrito::class);
    }*/


}
