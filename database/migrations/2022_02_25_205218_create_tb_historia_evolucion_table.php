<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbHistoriaEvolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('tb_historia_evolucion', function (Blueprint $table) {
            $table->id();
            $table->string('evolucion');    
            $table->string('acompaniante_evolucion', 300)->nullable();         
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('tbl_pacientes');
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
        Schema::dropIfExists('tb_historia_evolucion');
    }
}