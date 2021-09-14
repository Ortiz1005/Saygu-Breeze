<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->text('direccion');
            $table->integer('telefono');
            $table->string('sexo');
            $table->string('email')->unique();
            $table->string('usuario');
            $table->string('password');
            $table->text('tipo');
            $table->string('estado');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_ingresa');
            $table->dateTime('fecha_salida');
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
        Schema::dropIfExists('administrador');
    }
}
