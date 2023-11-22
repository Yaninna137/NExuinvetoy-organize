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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('ID_Proveedor');
            $table->unsignedInteger('ID_Registro_Servidor')->nullable();
            $table->string('proveedor');
            $table->string('direccion');
            $table->binary('Imagen_Proveedor')->nullable();
            $table->string('Tipo_de_Producto_que_abastece')->nullable();
            $table->string('Correo');
            $table->integer('Telefono');
            $table->date('Fecha_De_Ingreso')->nullable();
            $table->date('Fecha_De_Ultima_Vez_Que_Ayudo_Abastecer')->nullable();
            $table->string('Informacion_de_Productos_y_Costos', 600)->nullable();

            $table->foreign('ID_Registro_Servidor')->references('ID_Registro_Servidor')->on('registro_servidors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
