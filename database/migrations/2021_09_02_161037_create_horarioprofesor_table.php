<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioprofesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarioprofesor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_profesor');
            $table->unsignedBigInteger('id_materia');
            $table->unsignedBigInteger('id_grupo');
            $table->string('dia');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->foreign('id_profesor')->references('id')->on('profesor');
            $table->foreign('id_materia')->references('id')->on('materia');
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
        Schema::dropIfExists('horarioprofesor');
    }
}
