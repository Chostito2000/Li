<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function listarPersona(){

        $Mensaje = session('mensaje'); 

        if($Mensaje) {
            alert()->success('Operación exitosa!!!', 'Lista personas')->toToast();
        }

        $personas = Persona::all();
        alert()->success('Operación exitosa!!!', 'Lista personas')->toToast();
        return view('lista-personas', compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }
}
