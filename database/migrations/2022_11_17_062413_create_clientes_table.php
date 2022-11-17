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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->date('fecha_nacimiento');
            $table->date('fecha_alta');
            $table->string('rfc');
            $table->string('correo_electronico');
            $table->string('telefono');
            $table->string('dir_pais');
            $table->string('dir_estado');
            $table->string('dir_delegacion');
            $table->string('dir_colonia');
            $table->string('dir_calle');
            $table->string('dir_num_ext');
            $table->string('dir_num_int');
            $table->string('dir_cp');
            $table->decimal('credito');
            $table->decimal('deuda');
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
        Schema::dropIfExists('clientes');
    }
};
