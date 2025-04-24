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
        Schema::create('categorias', function (Blueprint $table) { // Sin tilde en el nombre de la tabla
            $table->id(); // Identificador único de la categoría
            $table->string('nombre'); // Nombre de la categoría
            $table->text('descripcion')->nullable(); // Descripción opcional
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
        Schema::dropIfExists('categorias'); // Asegúrate de usar el mismo nombre sin tildes
    }
};
