<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroProductowebcontroller extends Controller
{
    public function registroProducto(){
        return view('web.registro-producto-web');

    }
    public function guardarProducto(Request $request){
        dd($request);

    }
    
}
