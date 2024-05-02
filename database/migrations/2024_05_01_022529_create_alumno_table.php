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
        Schema::create('alumno', function (Blueprint $table) {
            $table->id('id_alumno');
            $table->unsignedInteger('dni')->unique();
            $table->string('apellido_alumno', 50);
            $table->string('nombre_alumno', 50);
            $table->string('distrito', 50);
            $table->unsignedInteger('telefono');
            $table->string('correo', 50);
            $table->unsignedTinyInteger('edad');
            $table->date('fecha_nac');
            $table->string('curso', 255);
            $table->string('horario', 255);
            // $table->primary(['dni']);
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
        Schema::dropIfExists('alumno');
    }
};
