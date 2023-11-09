<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
   protected $primarykey = 'productoID';
   protected $fillable =[
    'nombre',
    'descripcion',

    'precio',
    'stock',
    'foto',
    'fechaRegistro',
    'marca',
   ];
}
