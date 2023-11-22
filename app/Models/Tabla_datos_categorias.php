<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla_datos_categorias extends Model
{
    use HasFactory;

    protected $table = 'tabla_datos_categorias';
    protected $fillable = ['Tipo_de_Categoria', 'Producto_Total_unidad'];

}
