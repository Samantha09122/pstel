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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id(); // Identificador único de la reseña
            $table->unsignedBigInteger('id_usuario'); // ID del usuario
            $table->unsignedBigInteger('id_producto'); // ID del producto
            $table->integer('calificacion'); // Calificación (por ejemplo, 1 a 5)
            $table->text('comentario')->nullable(); // Comentario opcional
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
        Schema::dropIfExists('calificaciones');
    }
};
