<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tabla_datos_categorias;

class CategoriaController extends Controller
{


    public function index()
    {
        $categorias = Tabla_datos_categorias::all();
        return view('PAGINAS-NEXUS.categoria', compact('categorias'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'Tipo_de_Categoria' => 'required|string',
            'Producto_Total_unidad' => 'nullable|integer',
        ]);

        Tabla_datos_categorias::create($data);

        return redirect('/categorias')->with('success', 'Categoría creada correctamente.');
    }


    public function update(Request $request, $id)
    {
        try {
            $categoria = Tabla_datos_categorias::findOrFail($id);
            $categoria->Producto_Total_unidad = $request->input('Producto_Total_unidad');
            $categoria->save();

            return response()->json(['mensaje' => 'Datos actualizados correctamente en el servidor.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar los datos en el servidor.'], 500);
        }
    }


    public function destroy($id)
    {
        try {
            // Encuentra la categoría por su ID
            $categoria = Tabla_datos_categorias::findOrFail($id);

            // Elimina la categoría de la base de datos
            $categoria->delete();

            return response()->json(['mensaje' => 'Categoría eliminada correctamente.'], 200);
        } catch (\Exception $e) {
            // Manejo de errores, puedes ajustarlo según tus necesidades
            return response()->json(['error' => 'Error al eliminar la categoría.'], 500);
        }

    }


}
