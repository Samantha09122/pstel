<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosCarritoTable extends Migration
{
    public function up()
    {
        Schema::create('productos_carrito', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrito_id')->constrained('carritos')->onDelete('cascade'); // Relacionado con la tabla carritos
            $table->string('nombre'); // Nombre del producto
            $table->decimal('precio', 10, 2); // Precio del producto
            $table->integer('cantidad'); // Cantidad del producto
            $table->string('imagen')->nullable(); // Imagen del producto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos_carrito');
    }
}
