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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id(); // Identificador único del pedido
            $table->unsignedBigInteger('id_usuario'); // ID del usuario que realiza el pedido
            $table->decimal('total', 10, 2); // Total del pedido
            $table->string('estatus')->default('pendiente'); // Estatus del pedido (pendiente, completado, cancelado)
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
        Schema::dropIfExists('pedidos');
    }
};
