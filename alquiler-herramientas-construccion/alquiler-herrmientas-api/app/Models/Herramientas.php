<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramientas extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'nombre',
        'modelo',
        'precio',
        'descripcion'
    ];

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

    /*public function carritos(){
        return $this->belongsToMany(Carrito::class, 'herramienta_carritos','carrito_id', 'herramienta_id')->withPivot('cantidad','id');
    }*/

}
