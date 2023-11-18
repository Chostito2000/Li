<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;
class PersonaController extends Controller
{
    public function listarPersona(){
        try{
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            alert()->success('Exitoso', $nombre_dn)->toToast();
        }catch(Exception $ex){
            //toast('Success Toast','error');
            alert()->error('Error', $ex->getMessage())->toToast();
        }
        $mensaje = session('mensaje');
        if($mensaje){
        alert()->error('Error', $mensaje)->toToast();
        }
        $personas = Persona::all(); //sql nativo
        //dd($personas);
        //alert()->success('Operación exitosa!!!', 'Lista personas')->toToast();
        return view('lista-personas',compact('personas'));
    }
    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }

    public function eliminarPersona(Request $request, $id_persona)
    {
        $personas = Persona::find($id_persona);
        
        if (!$personas) {
            return redirect()->route("lista-personas")->with("mensaje", "La persona no fue encontrada");
        }

        $personas->delete();

        return redirect()
            ->route("lista-personas")
            ->with("mensaje", "La persona fue eliminada exitosamente");
    }

    public function editarPersona(Request $request, $id_persona){
        $persona = Persona::FindOrFail($id_persona);
        return view('editar-persona', compact('persona'));
        
    }

    public function actualizarPersona(Request $request, $id_persona){
        if($request->file('foto')){
            $urlFoto = $request->file('foto')->store('uploads','public');
        } else {
            $urlFoto = $request->get('foto');
        }
    
        $persona = Persona::where('personaID', $id_persona)->update([
            'nombres' => $request->get('nombres'),
            'paterno' => $request->get('paterno'),
            'materno' => $request->get('materno'),
            'bibliografia' => $request->get('bibliografia'),
            'foto' => $urlFoto,
            'documento' => $request->get('documento'),
            'celular' => $request->get('celular'),
        ]);
    
        return redirect()
            ->route('lista-personas')
            ->with('mensaje', 'Persona actualizada correctamente!!!');
    }
}    
