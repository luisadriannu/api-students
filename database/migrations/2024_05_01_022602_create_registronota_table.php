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
        Schema::create('registronota', function (Blueprint $table) {
            $table->integer('nro_orden')->primary();
            $table->char('id_docente', 5);
            $table->unsignedBigInteger('id_alumno');
            $table->char('id_curso', 5);
            $table->integer('nota');
            $table->foreign('id_docente')->references('id_docente')->on('docente');
            $table->foreign('id_alumno')->references('id_alumno')->on('alumno');
            $table->foreign('id_curso')->references('id_curso')->on('curso');
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
        Schema::dropIfExists('registronota');
    }
};
