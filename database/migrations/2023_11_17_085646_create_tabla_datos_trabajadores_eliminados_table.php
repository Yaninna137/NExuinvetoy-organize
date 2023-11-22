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
        Schema::create('tabla_datos_trabajadores_eliminados', function (Blueprint $table) {
            $table->increments('ID_R');
            $table->string('Nombre_Servidor')->nullable();
            $table->string('Nombre_Empleado_o_Administrador');
            $table->integer('rut');
            $table->string('Correo');
            $table->integer('Telefono');
            $table->date('Fecha_de_Dato_Eliminado')->nullable();
            $table->date('Fecha_De_Ingreso');
            $table->string('estado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_datos_trabajadores_eliminados');
    }
};
