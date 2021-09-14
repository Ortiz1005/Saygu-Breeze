<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_materia');
            $table->string('semestre');
            $table->foreign('id_carrera')->references('id')->on('carrera');
            $table->foreign('id_materia')->references('id')->on('materia');
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
        Schema::dropIfExists('semestre');
    }
}
