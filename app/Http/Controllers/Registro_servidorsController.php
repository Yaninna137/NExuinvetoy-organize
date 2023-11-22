<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro_servidors;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class Registro_servidorsController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos antes de almacenarlos en la base de datos
        $request->validate([
            'nombre_servidor' => 'required|string|max:255|unique:registro_servidors,Nombre_Servidor',
            'contrasena_servidor' => 'required|string|max:255', // Cambié a string, ya que generalmente las contraseñas se almacenan como cadenas
            'plataforma' => 'required|string|max:255',
        ]);

        // Verificar si ya existe un registro con el mismo nombre de servidor
        $nombre_servidor = $request->input('nombre_servidor');
        if (Registro_servidors::where('Nombre_Servidor', $nombre_servidor)->exists()) {
            return redirect()->back()->with('error', 'El nombre de servidor ya existe');
        }

        // Verificar si ya existe un registro con la misma plataforma
        $plataforma = $request->input('plataforma');
        if (Registro_servidors::where('Comentario_Uso_Plataforma', $plataforma)->exists()) {
            return redirect()->back()->with('error', 'La plataforma ya existe');
        }

        // Si no hay duplicados, continuar con el proceso de almacenamiento
        $registro_servidors = new Registro_servidors();
        $registro_servidors->Nombre_Servidor = $nombre_servidor;
        $registro_servidors->Contrasena_Servidor = Hash::make($request->input('Contrasena_Servidor'));
        $registro_servidors->Comentario_Uso_Plataforma = $plataforma;

        $registro_servidors->save();

        // Almacenar un mensaje de éxito
        return redirect()->back()->with('success', 'Registro de servidor exitoso');
    }
}
