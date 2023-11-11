<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $timestamps = false;
    protected $table = 'productos';
    protected $primaryKey = 'productoID';  // Corregido aquí
    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'precio',
        'foto',
    ];
}
