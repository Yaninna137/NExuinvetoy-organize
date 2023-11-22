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
        Schema::create('pagina_ajuste_administradors', function (Blueprint $table) {
            $table->increments('ID_Ajuste_Adm');
            $table->string('Color_Panel')->nullable();
            $table->string('Fuente_de_letra')->nullable();
            $table->integer('Tamaño_de_letra')->nullable();
            $table->string('Configuracion_Notificaciones')->nullable();
            $table->string('Gestion_de_Usuarios')->nullable();
            $table->unsignedInteger('ID_Registro_Administrador')->nullable();
            $table->unsignedInteger('ID_Registro_Servidor')->nullable();

            $table->foreign('ID_Registro_Administrador')->references('ID_Registro_Administrador')->on('registro_administradors');
            $table->foreign('ID_Registro_Servidor')->references('ID_Registro_Servidor')->on('registro_servidors');

            $table->timestamps(); // Agrega created_at y updated_at automáticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagina_ajuste_administradors');
    }
};
