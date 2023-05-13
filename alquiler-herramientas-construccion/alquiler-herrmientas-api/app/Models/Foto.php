<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'src'
    ];

    public function herramienta()
    {
        return $this->belongsTo(Herramienta::class);
    }
}
