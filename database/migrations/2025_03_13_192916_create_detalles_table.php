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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id(); // Identificador único del detalle
            $table->unsignedBigInteger('id_pedido'); // ID del pedido
            $table->unsignedBigInteger('id_producto'); // ID del producto
            $table->integer('cantidad'); // Cantidad de productos
            $table->decimal('precio_unitario', 10, 2); // Precio unitario del producto
            $table->decimal('precio_total', 10, 2); // Precio total (precio_unitario * cantidad)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
};
