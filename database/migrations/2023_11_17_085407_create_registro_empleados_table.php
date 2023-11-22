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
        Schema::create('registro_empleados', function (Blueprint $table) {
            $table->increments('ID_Registro_Empleados');
            $table->string('Nombre_Usuario')->nullable();
            $table->string('Tipo')->nullable();
            $table->binary('Imagen_Usuario')->nullable();
            $table->integer('rut_usuario')->nullable();
            $table->string('Contraseña_Usuario', 60);
            $table->string('Correo');
            $table->integer('Teléfono')->nullable();
            $table->date('Fecha_ingreso_al_Sistema')->nullable();
            $table->integer('En_línea')->nullable();
            $table->unsignedInteger('ID_Registro_Administrador')->nullable(); // Asegúrate de que sea del mismo tipo

            $table->foreign('ID_Registro_Administrador')->references('ID_Registro_Administrador')->on('registro_administradors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_empleados');
    }
};

