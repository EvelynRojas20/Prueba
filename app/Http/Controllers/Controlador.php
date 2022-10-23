<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarInfo;

class Controlador extends Controller
{
    public function registroInfo(ValidarInfo $req){
        return redirect()->route('in')->with('confirmacion','Informacion guardada');
    }
}