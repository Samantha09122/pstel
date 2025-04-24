<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id(); // Identificador único del carrito
            $table->unsignedBigInteger('id_usuario'); // ID del usuario
            $table->unsignedBigInteger('id_producto'); // ID del producto
            $table->integer('cantidad')->default(1); // Cantidad de productos
            $table->decimal('precio_total', 10, 2)->nullable(); // Precio total (puede ser nulo)
            $table->string('imagen_url')->nullable(); // Ruta o URL de la imagen
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito');
    }
};
