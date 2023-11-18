<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Productos;
use Exception;

class ProductoController extends Controller
{
    // ... Other methods in ProductoController ...

    public function listarProducto()
    {
        try {
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            alert()->success('Operación exitosa', $nombre_dn)->toToast();
        } catch (Exception $ex) {
            alert()->error('Error', $ex->getMessage())->toToast();
        }

        $productos = Productos::all();

        $mensaje = session('mensaje');
        if ($mensaje) {
            alert()->success('Operación exitosa!!!', $mensaje)->toToast();
        }

        return view('lista-productos', compact('productos'));
    }

    public function mostrarProducto(Request $request, $id_producto)
    {
        // Code from mostrarProducto method in ProductoController
        return view('mostrar-producto', compact('id_producto'));
    }

    public function eliminarProducto(Request $request, $id_producto)
    {
        $producto = Productos::find($id_producto);

        if (!$producto) {
            return redirect()->route("lista-productos")->with("mensaje", "El producto no fue encontrado");
        }

        $producto->delete();

        return redirect()
            ->route("lista-productos")
            ->with("mensaje", "El producto fue eliminado exitosamente");
    }

    public function editarProducto(Request $request, $id_producto)
    {
        $producto = Productos::find($id_producto);

        if (!$producto) {
            return redirect()->route("lista-productos")->with("mensaje", "El producto no fue encontrado");
        }

        return view('editar-producto', compact('producto'));
    }

    public function actualizarProducto(Request $request, $id_producto)
    {
        if ($request->hasFile('foto')) {
            $urlFoto = $request->file('foto')->store('uploads', 'public');
        } else {
            $urlFoto = $request->get('foto');
        }

        $producto = Productos::where('ProductoID', $id_producto)->update([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'precio' => $request->get('precio'),
            'foto' => $urlFoto,
        ]);

        return redirect()
            ->route('lista-productos')
            ->with('mensaje', 'Producto actualizado correctamente!!!');
    }
}
