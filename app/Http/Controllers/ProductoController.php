<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Productos;

class ProductoController extends Controller
{
    public function listarProducto(){
        try{
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            alert()->success('operacion exitosa', $nombre_dn)->toToast();
        }catch(Exception $ex){
            //toast('Success Toast','error');
            alert()->error('Error', $ex->getMessage())->toToast();
        }
        $productos = Productos::all();
        //$personas = [];
        
        //dd($personas);
        return view('lista-productos',compact('productos'));
    }

    public function mostrarProducto(Request $request, $id_producto){
        //dd($request);
        return view('mostrar-producto', compact('id_producto'));
    }
}