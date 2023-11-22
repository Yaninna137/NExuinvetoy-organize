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
        Schema::create('tabla_mensaje_consultas', function (Blueprint $table) {
            $table->increments('ID_Consulta');
            $table->char('Nombre', 50);
            $table->string('Pregunta', 400);
            $table->string('Respuesta', 400);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_mensaje_consultas');
    }
};
