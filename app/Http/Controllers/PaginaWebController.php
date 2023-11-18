<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;


class PaginaWebController extends Controller
{
    public function verPaginaWeb(){
        $data = [
            'personas' => Persona::all(), 
            'productos' => ''
        ];
        return view('web.pagina-web-principal', compact('data'));
    }
}
