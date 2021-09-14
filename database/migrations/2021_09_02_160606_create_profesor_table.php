<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->text('direccion');
            $table->integer('telefono');
            $table->string('sexo');
            $table->string('email')->unique();
            $table->dateTime('fecha_alta');
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
        Schema::dropIfExists('profesor');
    }
}
