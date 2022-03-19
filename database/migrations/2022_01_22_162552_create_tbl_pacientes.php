<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_apellidos');
            $table->dateTime('fecha_hora');
            $table->string('identificacion');
            $table->string('edad');
            $table->string('sexo');
            $table->string('fecha_nacimiento');
            $table->string('estado_civil');
            $table->string('eps');
            $table->string('acompaniante');
            $table->string('procedencia');
            $table->string('ocupacion');
            $table->string('telefono');
            $table->boolean('historia_clinica')->default(0);
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
        Schema::dropIfExists('tbl_pacientes');
    }
}