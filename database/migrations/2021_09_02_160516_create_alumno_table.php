<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->id();
            $table->integer('n_control');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->integer('direccion');
            $table->integer('telefono');
            $table->string('sexo');
            $table->string('email')->unique();
            $table->date('fecha_alta');
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
}
