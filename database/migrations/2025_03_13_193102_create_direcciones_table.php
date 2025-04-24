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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id(); // Identificador único de la dirección
            $table->unsignedBigInteger('id_usuario'); // ID del usuario
            $table->string('calle'); // Calle
            $table->string('ciudad'); // Ciudad
            $table->string('estado'); // Estado o región
            $table->string('codigo_postal'); // Código postal
            $table->string('pais'); // País
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
        Schema::dropIfExists('direcciones');
    }
};
