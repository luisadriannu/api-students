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
        Schema::create('matricula', function (Blueprint $table) {
            $table->char('id_matricula', 5)->primary();
            $table->unsignedBigInteger('id_alumno');
            $table->char('id_docente', 5);
            $table->char('periodo', 7);
            $table->char('mes_inicio', 20);
            $table->date('fecha_inicio');
            $table->foreign('id_alumno')->references('id_alumno')->on('alumno');
            $table->foreign('id_docente')->references('id_docente')->on('docente');
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
        Schema::dropIfExists('matricula');
    }
};
