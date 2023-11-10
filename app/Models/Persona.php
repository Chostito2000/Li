<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table = 'personas';
   protected $primarykey = 'personaID';
   public $timestamps= false;
   protected $fillable =[
    'nombres',
    'paterno',
    'naterno',
    'bibligrofia',
    'foto',
    'documento',
    'celular',
   ];
}
