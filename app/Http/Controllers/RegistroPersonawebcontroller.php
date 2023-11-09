<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroPersonawebcontroller extends Controller
{
    public function registroPersona(){
        return view('web.registro-persona-web');

    }
}
