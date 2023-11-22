<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tabla_datos_productos;

class ProductoController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'Nombre_producto' => 'required|string',
                'Codigo_Barra' => 'required|string',
                'Numero_de_Unidades' => 'required|numeric',
                'categoria' => 'required|string',
                'fecha_registro' => 'required|date',
            ]);

            $tabla_datos_productos = Tabla_datos_productos::create($data);

            return response()->json($tabla_datos_productos);
        } catch (\Exception $e) {
            // En caso de error, devuelve una respuesta con un código de estado 500 y el mensaje de error
            return response()->json(['error' => $e->getMessage()], 500);
        }
}

}
