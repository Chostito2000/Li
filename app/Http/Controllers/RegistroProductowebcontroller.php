<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Exception;

class RegistroProductowebcontroller extends Controller
{
    public function registroProducto(){
        return view('web.registro-producto-web');
    }

    public function guardarProducto(Request $request){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'foto' => 'required|image',
        ]);

        try {
            $data = [
                'nombre_producto' => $request->get('nombre'),
                'descripcion' => $request->get('descripcion'),
                'precio' => $request->get('precio'),
                // Considera almacenar la foto correctamente en tu aplicación
                'foto' => $request->file('foto')->store('fotos_productos', 'public'),
            ];

            Productos::create($data);

            return redirect()
                ->route('lista-productos')
                ->with('mensaje', 'Producto registrado correctamente!!!');
        } catch (Exception $ex) {
            dd($ex);
            return redirect()
                ->route('registro.producto')
                ->with('mensaje', $ex->getMessage());
        }
    }
}
