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
        Schema::create('tabla_datos_historials', function (Blueprint $table) {
            $table->increments('ID_Historial');
            $table->dateTime('Fecha_Registro')->nullable();
            $table->string('Tipo_Evento')->nullable();
            $table->text('Descripcion_Evento')->nullable();
            $table->unsignedInteger('ID_Registro_Servicio')->nullable();

            $table->foreign('ID_Registro_Servicio')->references('ID_Registro_Servidor')->on('registro_servidors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_datos_historials');
    }
};
