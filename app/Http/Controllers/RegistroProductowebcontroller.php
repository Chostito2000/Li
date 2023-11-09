<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;


class RegistroProductowebcontroller extends Controller
{
    public function registroProducto(){
        return view('web.registro-producto-web');

    }
    
    public function guardarProducto(Request $request){
        try {
            $data = [
                'nombre_producto' => $request->input('nombre_producto'),
                'descripcion' => $request->input('msg'),
            ];
    
            Productos::create($data);
    
            return redirect()->route('lista-producto')
                             ->with('mensaje', 'Producto registrado correctamente');
        } catch (\Exception $ex) {
            return redirect()->route('registro.producto')
                             ->with('error', $ex->getMessage());
        }
    }
}
    