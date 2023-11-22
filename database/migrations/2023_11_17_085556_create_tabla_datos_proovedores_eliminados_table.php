<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabla_datos_proveedores_eliminados', function (Blueprint $table) {
            $table->increments('ID_R');
            $table->string('Nombre_Servidor')->nullable();
            $table->string('Nombre_Empleado_o_Administrador')->nullable();
            $table->string('Encargado')->nullable();
            $table->string('Correo')->nullable();
            $table->integer('Telefono')->nullable();
            $table->date('Fecha_de_Dato_Eliminado')->nullable();
            $table->date('Fecha_De_Ingreso')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_datos_proveedores_eliminados');
    }
};
