<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;

class PersonaController extends Controller
{
    public function listarPersona()
    {
        $mensaje = session('mensaje');
        if ($mensaje) {
            alert()->success('Operación exitosa!!!', $mensaje)->toToast();
        }

        $personas = Persona::all();
        return view('lista-personas', compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona)
    {
        return view('mostrar-persona', compact('id_persona'));
    }

    public function eliminarPersona(Request $request, $id_persona)
    {
        $persona = Persona::find($id_persona);
        
        if (!$persona) {
            return redirect()->route("lista-personas")->with("mensaje", "La persona no fue encontrada");
        }

        $persona->delete();

        return redirect()
            ->route("lista-personas")
            ->with("mensaje", "La persona fue eliminada exitosamente");
    }
}
