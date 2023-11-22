<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tabla_datos_trabajadores_eliminados;



class EmpleadosController extends Controller
{
    public function eliminar($id)
    {
        // Realiza la lógica para eliminar el trabajador con el ID proporcionado en la base de datos
        Tabla_datos_trabajadores_eliminados::destroy($id);

        // Devuelve una respuesta indicando el éxito de la operación
        return response()->json(['mensaje' => 'Trabajador eliminado con éxito']);
    }
}

