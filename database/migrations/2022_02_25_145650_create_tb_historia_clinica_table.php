<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbHistoriaClinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('tb_historias_clinicas', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_consulta', 300)->nullable();
            $table->string('antecedentes_enfermedad_actual', 300)->nullable();
            $table->boolean('tabaco')->nullable();
            $table->string('desc_tabaco', 300)->nullable();                                    
            $table->boolean('alcohol')->nullable();
            $table->string('desc_alcohol', 300)->nullable();                                    
            $table->boolean('drogas')->nullable();
            $table->string('desc_drogas', 300)->nullable();                                    
            $table->boolean('otras')->nullable();
            $table->string('desc_otras', 300)->nullable();                                    
            $table->string('variaciones_peso', 300)->nullable();                                    
            $table->string('fum', 300)->nullable();                                    
            $table->string('planificacion', 300)->nullable();                                    
            $table->string('patologicos', 300)->nullable();                                    
            $table->string('medicamentos_toma', 300)->nullable();   
            $table->boolean('aparato_cardiovascular')->nullable();
            $table->string('desc_aparato_cardiovascular', 300)->nullable();                                                                     
            $table->boolean('aparato_respiratorio')->nullable();
            $table->string('desc_aparato_respiratorio', 300)->nullable();                                                                     
            $table->boolean('otorrino')->nullable();
            $table->string('desc_otorrino', 300)->nullable();                                                                     
            $table->boolean('aparato_digestivo')->nullable();
            $table->string('desc_aparato_digestivo', 300)->nullable();                                                                     
            $table->boolean('aparato_unitario')->nullable();
            $table->string('desc_aparato_unitario', 300)->nullable();                                                                                                                                                     
            $table->boolean('piel_faneras')->nullable();
            $table->string('desc_piel_faneras', 300)->nullable();                                                                     
            $table->boolean('entidades_psiquiatricas')->nullable();
            $table->string('desc_entidades_psiquiatricas', 300)->nullable();                                                                     
            $table->boolean('enfermedades_endocrinas')->nullable();
            $table->string('desc_enfermedades_endocrinas', 300)->nullable();                                                                     
            $table->boolean('enfermedades_inmuno_hematologicas')->nullable();
            $table->string('desc_inmuno_hematologicas', 300)->nullable();                                                                     
            $table->boolean('enfermedades_sistema_nervioso')->nullable();
            $table->string('desc_enfermedades_sistema_nervioso', 200)->nullable();                                                                     
            $table->boolean('enfermedades_aparato_icomotor')->nullable();
            $table->string('desc_enfermedades_aparato_icomotor', 300)->nullable();                                                                     
            $table->boolean('enfermedades_otras')->nullable();
            $table->string('desc_enfermedades_otras', 300)->nullable();                                                                     
            $table->boolean('cirugias')->nullable();
            $table->string('desc_cirugias', 300)->nullable();                                                                     
            $table->boolean('traumaticos')->nullable();
            $table->string('desc_traumaticos', 300)->nullable();                                                                     
            $table->boolean('antecedentes_alergicos')->nullable();
            $table->string('desc_antecedentes_alergicos', 300)->nullable();                                                                     
            $table->boolean('examenes_complementarios')->nullable();
            $table->string('desc_examenes_complementarios', 300)->nullable();                                                                     
            $table->string('antecedentes_heredofamiliares', 300)->nullable();                                                                     
            $table->string('estado_general', 300)->nullable();                                                                    
            $table->string('peso')->nullable();                                                                     
            $table->string('talla')->nullable();                                                                     
            $table->string('masa_corporal')->nullable();                                                                     
            $table->string('estado_nutricional')->nullable();                                                                    
            $table->string('estado_hidratacion')->nullable();                                                                     
            $table->string('presion_arterial')->nullable();                                                                     
            $table->string('oxigenacion')->nullable();                                                                     
            $table->string('t_laser')->nullable();                                                                     
            $table->string('frecuencia_respiratoria')->nullable();                                                                     
            $table->string('pulso')->nullable();                                                                     
            $table->string('piel_faneras_fisico')->nullable();                                                                     
            $table->string('otorrino_fisico')->nullable();                                                                     
            $table->string('mucosas')->nullable();                                                                     
            $table->string('cabeza')->nullable();                                                                     
            $table->string('cuello')->nullable();                                                                     
            $table->string('torax')->nullable();                                                                     
            $table->string('aparato_respiratorio_fisico')->nullable();                                                                     
            $table->string('aparato_cardiovascular_fisico')->nullable();                                                                     
            $table->string('abdomen')->nullable();                                                                     
            $table->string('genito')->nullable();                                                                     
            $table->string('osteomioarticular')->nullable();                                                                   
            $table->string('neurologico')->nullable();                                                                  
            $table->string('glasgow')->nullable();                                                                     
            $table->string('otros_fisico')->nullable();                                                                  
            $table->string('dermaton_analisis')->nullable();                                                               
            $table->string('diagnostico_presuntivos')->nullable();                                                                                                                                          
            $table->string('solicitud_examenes')->nullable();                                                                     
            $table->string('tratamiento_alopatico')->nullable();                                                                     
            $table->string('recomendaciones', 500)->nullable();                              
            $table->string('acompaniante', 100)->nullable();                              
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
        Schema::dropIfExists('tb_historias_clinicas');
    }
}