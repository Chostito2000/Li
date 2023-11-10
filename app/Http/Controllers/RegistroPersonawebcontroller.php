<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;

class RegistroPersonawebcontroller extends Controller
{
    public function registroPersona(){
        $mensaje = session('mensaje');
        if($mensaje){
            alert()->success('operacion exitosa!!!', $mensaje)->toToast();
        }
        


    }
    public function guardarPersona(Request $request){

        try{
            $data = [
                'nombres'=> $request->get('nombres'),
                'paterno'=> $request->get('paterno'),
                'materno'=> $request->get('materno'),
                'bibliografia'=> $request->get('bibliografia'),
                'foto'=> $request->get('foto'),
                'documento'=> $request->get('documento'),
                'celular'=> $request->get('celular'),
    
            ];
           // Persona::create($data);
            return redirect()->route('lista-personas')
            ->with('mensaje','Persona registrada correctamente!!!');

        dd($request);
            
        }catch(Exception $ex){
            dd($ex);
            return redirect()->route('registro.persona')
            ->with('mensaje',$ex ->getMessage());


            
        }
        
     
    }
}
