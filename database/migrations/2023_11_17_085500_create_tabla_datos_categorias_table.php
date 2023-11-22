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
        Schema::create('tabla_datos_categorias', function (Blueprint $table) {
            $table->increments('ID_Categorias');
            $table->unsignedInteger('ID_Registro_Servidor')->nullable();
            $table->string('Tipo_de_Categoria')->nullable();
            $table->integer('Producto_Total_unidad')->nullable();
            $table->foreign('ID_Registro_Servidor')->references('ID_Registro_Servidor')->on('registro_servidors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_datos_categorias');
    }
};
