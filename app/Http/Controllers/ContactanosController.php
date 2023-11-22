<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tabla_mensaje_consultas;

class ContactanosController extends Controller
{
    public function store(Request $request){
        $tabla_mensaje_consultas = new Tabla_mensaje_consultas();
        $tabla_mensaje_consultas->Nombre = $request->nombre;
        $tabla_mensaje_consultas->Pregunta = $request->correo;
        $tabla_mensaje_consultas->Respuesta = $request->mensaje;
        $tabla_mensaje_consultas->save();

        return redirect()->back()->with('success', 'Tu mensaje ha ido enviado con exito');


    }
}
