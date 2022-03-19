<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;
    protected $table = 'tb_historias_clinicas';
    protected $fillable = [
        'motivo_consulta',
        'antecedentes_enfermedad_actual',
        'tabaco',
        'desc_tabaco',
        'alcohol',
        'desc_alcohol',
        'drogas',
        'desc_drogas',
        'otras',
        'desc_otras',
        'variaciones_peso',
        'fum',
        'planificacion',
        'patologicos',
        'medicamentos_toma',
        'aparato_cardiovascular',
        'desc_aparato_cardiovascular',
        'aparato_respiratorio',
        'desc_aparato_respiratorio',
        'otorrino',
        'desc_otorrino',
        'aparato_digestivo',
        'desc_aparato_digestivo',
        'aparato_unitario',
        'desc_aparato_unitario',
        'piel_faneras',
        'desc_piel_faneras',
        'entidades_psiquiatricas',
        'desc_entidades_psiquiatricas',
        'enfermedades_endocrinas',
        'desc_enfermedades_endocrinas',
        'enfermedades_inmuno_hematologicas',
        'desc_inmuno_hematologicas',
        'enfermedades_sistema_nervioso',
        'desc_enfermedades_sistema_nervioso',
        'enfermedades_aparato_icomotor',
        'desc_enfermedades_aparato_icomotor',
        'enfermedades_otras',
        'desc_enfermedades_otras',
        'cirugias',
        'desc_cirugias',
        'traumaticos',
        'desc_traumaticos',
        'antecedentes_alergicos',
        'desc_antecedentes_alergicos',
        'examenes_complementarios',
        'desc_examenes_complementarios',
        'antecedentes_heredofamiliares',
        'estado_general',
        'peso',
        'talla',
        'masa_corporal',
        'estado_nutricional',
        'estado_hidratacion',
        'presion_arterial',
        'oxigenacion',
        't_laser',
        'frecuencia_respiratoria',
        'pulso',
        'piel_faneras_fisico',
        'otorrino_fisico',
        'mucosas',
        'cabeza',
        'cuello',
        'torax',
        'aparato_respiratorio_fisico',
        'aparato_cardiovascular_fisico',
        'abdomen',
        'genito',
        'osteomioarticular',
        'neurologico',
        'glasgow',
        'otros_fisico',
        'dermaton_analisis',
        'diagnostico_presuntivos',
        'solicitud_examenes',
        'tratamiento_alopatico',
        'recomendaciones'
       
    ];
}