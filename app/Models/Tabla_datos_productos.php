<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla_datos_productos extends Model
{
    use HasFactory;

    // En tu modelo Tabla_datos_productos
    protected $fillable = ['Nombre_producto', 'Codigo_Barra', 'Numero_de_Unidades', 'categoria', 'fecha_registro'];

}
