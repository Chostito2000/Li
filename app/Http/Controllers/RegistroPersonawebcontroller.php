<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;

class RegistroPersonawebcontroller extends Controller
{
    public function registroPersona(){
        // dd('hola');
        return view('web.registro-persona-web');
        
    }

    public function guardarPersona(Request $request){
        $urlFoto = $request->file('foto')->store('uploads','public');
        try{



            $data = [
                'nombres' => $request->get('nombres'),
                'paterno' => $request->get('paterno'),
                'materno' => $request->get('materno'),
                'bibliografia' => $request->get('bibliografia'),
                'foto' => $urlFoto,
                'documento' => $request->get('documento'),
                'celular' => $request->get('celular'),
            ];

        Persona::create($data);
           // dd($data);
            return redirect()
            ->route('lista-personas')
            ->with('mensaje','Persona registrada correctamente!!!');
            
        } catch(Exception $ex){
            dd($ex);
            return redirect()
            ->route('registro.persona')
            ->with('mensaje',$ex->getMessage());
        }  
    }

}
