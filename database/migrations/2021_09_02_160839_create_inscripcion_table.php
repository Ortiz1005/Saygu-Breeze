<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inscripcion');
            $table->unsignedBigInteger('id_administrador');
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_grupo');
            $table->foreign('id_administrador')->references('id')->on('administrador');
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->foreign('id_grupo')->references('id')->on('grupo');
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
        Schema::dropIfExists('inscripcion');
    }
}
