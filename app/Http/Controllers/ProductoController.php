<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Productos; // Make sure to import the necessary model
use Exception;

class ProductoController extends Controller
{
    // ... Other methods in ProductoController ...

    public function listarProducto(){
        try{
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            alert()->success('operacion exitosa', $nombre_dn)->toToast();
        }catch(Exception $ex){
            alert()->error('Error', $ex->getMessage())->toToast();
        }

        $productos = Productos::all();
        //$personas = [];

        $mensaje = session('mensaje');
        if($mensaje){
            alert()->success('operacion exitosa!!!', $mensaje)->toToast();
        }
        $personas = Persona::all();
        //$personas = [];

        //dd($personas);

        return view('lista-productos', compact('productos', 'personas'));
    }

    public function mostrarProducto(Request $request, $id_producto){
        // Code from mostrarPersona method in PersonaController
        return view('mostrar-producto', compact('id_producto'));
    }
}
