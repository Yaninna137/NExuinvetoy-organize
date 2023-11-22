<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'proveedor' => 'required|string',
            'correo' => 'required|email',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
        ]);

        Proveedor::create($data);

        return redirect('/proveedores')->with('success', 'Proveedor agregado exitosamente');
    }
}
