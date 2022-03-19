<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Historia;
use App\Models\HistoriaEvolucion;
use Illuminate\Support\Facades\DB;
use PDF;

class PacienteController extends Controller
{
    public function store(Request $request)
    {
    if (!$request->ajax()) return redirect('/');
    try {      
      $data = new Paciente();
      $data->nombres_apellidos = $request->nombres_apellidos;      
      $data->fecha_hora = $request->fecha_hora;      
      $data->identificacion = $request->identificacion;      
      $data->edad = $request->edad;      
      $data->sexo = $request->sexo;      
      $data->fecha_nacimiento = $request->fecha_nacimiento;      
      $data->estado_civil = $request->estado_civil;      
      $data->eps = $request->eps;      
      $data->acompaniante = "VACIO";      
      $data->procedencia = $request->procedencia;      
      $data->ocupacion = $request->ocupacion;      
      $data->telefono = $request->telefono;      
      $data->historia_clinica = 0;      
      $data->save();
      DB::commit();
    } catch(\Illuminate\Database\QueryException $ex){
      return false;
    }
    }
    public function historias_store(Request $request)
    {

      if (!$request->ajax()) return redirect('/');
    
      $data = new Historia();
      $data->motivo_consulta = $request->motivo_consulta;      
      $data->antecedentes_enfermedad_actual = $request->antecedentes_enfermedad;      
      $data->tabaco = $request->check_tabaco;      
      $data->desc_tabaco = $request->tabaco;      
      $data->alcohol = $request->check_alcohol;      
      $data->desc_alcohol = $request->alcohol;      
      $data->drogas = $request->check_drogas;      
      $data->desc_drogas = $request->drogas;      
      $data->otras = $request->check_otras;      
      $data->desc_otras = $request->otras;      
      $data->variaciones_peso = $request->variaciones_peso;      
      $data->fum = $request->fum;      
      $data->planificacion = $request->planificacion;      
      $data->patologicos = $request->patologico;      
      $data->medicamentos_toma = $request->medicamentos_toma;      
      $data->aparato_cardiovascular = $request->check_cardiovascular;      
      $data->desc_aparato_cardiovascular = $request->cardiovascular;      
      $data->aparato_respiratorio = $request->check_respiratorio;      
      $data->desc_aparato_respiratorio = $request->respiratorio;      
      $data->otorrino = $request->check_otorrino;      
      $data->desc_otorrino = $request->otorrino;      
      $data->aparato_digestivo = $request->check_digestivo;      
      $data->desc_aparato_digestivo = $request->digestivo;      
      $data->aparato_unitario = $request->check_urinario;      
      $data->desc_aparato_unitario = $request->urinario;      
      $data->piel_faneras = $request->check_faneras;      
      $data->desc_piel_faneras = $request->faneras;      
      $data->entidades_psiquiatricas = $request->check_psiquiatricas;      
      $data->desc_entidades_psiquiatricas = $request->psiquiatricas;      
      $data->enfermedades_endocrinas = $request->check_metabolicas;      
      $data->desc_enfermedades_endocrinas = $request->metabolicas;      
      $data->enfermedades_inmuno_hematologicas = $request->check_hematologicas;      
      $data->desc_inmuno_hematologicas = $request->hematologicas;      
      $data->enfermedades_sistema_nervioso = $request->check_nervioso;      
      $data->desc_enfermedades_sistema_nervioso = $request->nervioso;      
      $data->enfermedades_aparato_icomotor = $request->check_locomotor;      
      $data->desc_enfermedades_aparato_icomotor = $request->locomotor;      
      $data->enfermedades_otras = $request->check_otras_clinicos;      
      $data->desc_enfermedades_otras = $request->otras_clinicos;      
      $data->cirugias = $request->check_cirugias;      
      $data->desc_cirugias = $request->cirugias;      
      $data->traumaticos = $request->check_traumaticos;      
      $data->desc_traumaticos = $request->traumaticos;      
      $data->antecedentes_alergicos = $request->check_alergicos;      
      $data->desc_antecedentes_alergicos = $request->alergicos;      
      $data->examenes_complementarios = $request->check_previos;      
      $data->desc_examenes_complementarios = $request->previos;      
      $data->antecedentes_heredofamiliares = $request->antecedentes_herdofamiliares;      
      $data->estado_general = $request->estado_general;      
      $data->peso = $request->peso;      
      $data->talla = $request->talla;      
      $data->masa_corporal = $request->masa_corporal;      
      $data->estado_nutricional = $request->estado_nutricional;      
      $data->estado_hidratacion = $request->estado_hidratacion;      
      $data->presion_arterial = $request->presion_arterial_fisico;      
      $data->oxigenacion = $request->oxigenacion_fisico;      
      $data->t_laser = $request->t_laser;      
      $data->frecuencia_respiratoria = $request->frecuencia_respiratoria;      
      $data->pulso = $request->pulso_fisico;      
      $data->piel_faneras_fisico = $request->piel_faneras;      
      $data->otorrino_fisico = $request->otorrino;      
      $data->mucosas = $request->mucosas;      
      $data->cabeza = $request->cabeza;      
      $data->cuello = $request->cuello;      
      $data->torax = $request->torax;      
      $data->aparato_respiratorio_fisico = $request->respiratorio;      
      $data->aparato_cardiovascular_fisico = $request->cardiovascular;      
      $data->abdomen = $request->abdomen;      
      $data->genito = $request->genito_unitario;      
      $data->osteomioarticular = $request->osteomioarticular;      
      $data->neurologico = $request->neurologico;      
      $data->glasgow = $request->glasgow;      
      $data->otros_fisico = $request->otro_fisico;      
      $data->dermaton_analisis = $request->analisis_dermaton;      
      $data->diagnostico_presuntivos = $request->diagnosticos_presuntivos;      
      $data->solicitud_examenes = $request->examenes_complementarios;      
      $data->tratamiento_alopatico = $request->tratamiento_alopatico;      
      $data->recomendaciones = $request->recomendaciones;                  
      $data->paciente_id = $request->paciente_id;                  
      $data->acompaniante = $request->acompaniante;                  
      $data->save();

      $paciente = Paciente::where('id', $request->paciente_id)->firstOrFail();
      $paciente->historia_clinica = 1;
      $paciente->save();
      DB::commit();
   
    }
    public function historias_evolucion_store(Request $request)
    {

      if (!$request->ajax()) return redirect('/');
    
      $data = new HistoriaEvolucion();
      $data->evolucion = $request->evolucion;      
      $data->paciente_id = $request->paciente_id;                  
      $data->acompaniante_evolucion = $request->acompaniante_evolucion;                  
      $data->save();
      DB::commit();
   
    }
    public function editar(Request $request)
    {

        if (!$request->ajax()) return redirect('/');
    try {      
      $data = Paciente::where('id', $request->idPrimary)->firstOrFail();
      $data->nombres_apellidos = $request->nombres_apellidos;      
      $data->fecha_hora = $request->fecha_hora;      
      $data->identificacion = $request->identificacion;      
      $data->edad = $request->edad;      
      $data->sexo = $request->sexo;      
      $data->fecha_nacimiento = $request->fecha_nacimiento;      
      $data->estado_civil = $request->estado_civil;      
      $data->eps = $request->eps;      
      $data->acompaniante = $request->acompaniante;      
      $data->procedencia = $request->procedencia;      
      $data->ocupacion = $request->ocupacion;      
      $data->telefono = $request->telefono;      
      $data->save();
      DB::commit();
    } catch(\Illuminate\Database\QueryException $ex){
      return false;
    }
    }

    public function listar_pacientes()
    {
        return Paciente::all();
    }
    public function count_historia(Request $request)
    {
      $data = Historia::where('paciente_id', (int)$request->paciente_id)->exists();
      return ["respuesta" => $data];
    }
    public function get_historia(Request $request)
    {
      $data = Historia::where('paciente_id', (int)$request->paciente_id)->firstOrFail();
      $evoluciones = HistoriaEvolucion::where('paciente_id', (int)$request->paciente_id)->get();
      return ["respuesta" => $data, "evoluciones" => $evoluciones];
    }
     public function PDFgenerate($paciente)
    {
      $int = (int)$paciente;
      $historia = Historia::where('paciente_id', (int)$paciente)->firstOrFail();
      $paciente = Paciente::where('id', (int)$paciente)->firstOrFail();
      $evoluciones = HistoriaEvolucion::where('paciente_id', (int)$int)->get();
    //  dd($evoluciones);
       $data = [
         'title' => $historia->motivo_consulta,
         'nombres_apellidos' => $paciente->nombres_apellidos,
         'fecha_hora' => $paciente->created_at,
         'Identificacion' => $paciente->identificacion,
         'Edad' => $paciente->edad,
         'Sexo' => $paciente->sexo,
         'fecha_nacimiento' => $paciente->fecha_nacimiento,
         'estado_civil' => $paciente->estado_civil,
         'eps' => $paciente->eps,
         'acompaniante' => $paciente->acompaniante,
         'Procedencia' => $paciente->procedencia,
         'Ocupacion' => $paciente->ocupacion,
         'Telefono' => $paciente->telefono,
         'motivo_consulta' => $historia->motivo_consulta,
         'antecedentes_enfermedad' => $historia->antecedentes_enfermedad_actual,
         'antecedentes_personales' => $historia->antecedentes_enfermedad_actual,
         'tabaco' => $historia->desc_tabaco,
         'alcohol' => $historia->desc_alcohol,
         'drogas' => $historia->desc_drogas,
         'otras' => $historia->desc_otras,
         'cpc' => $historia->desc_otras,
         'variaciones_peso' => $historia->variaciones_peso,
         'fum' => $historia->fum,
         'planificacion' => $historia->planificacion,
         'patologicos' => $historia->patologicos,
         'medicamentos_toma' => $historia->medicamentos_toma,
         'aparato_cardiovascular' => $historia->desc_aparato_cardiovascular,
         'aparato_respiratorio' => $historia->desc_aparato_respiratorio,
         'otorrino' => $historia->desc_otorrino,
         'desc_aparato_digestivo' => $historia->desc_aparato_digestivo,
         'aparato_urinario' => $historia->desc_aparato_unitario,
         'piel_faneras' => $historia->desc_piel_faneras,
         'enfermedades_psiquiatricas' => $historia->desc_entidades_psiquiatricas,
         'enfermedades_endocrinas' => $historia->desc_enfermedades_endocrinas,
         'enfermedades_hematologicas' => $historia->desc_inmuno_hematologicas,
         'enfermedades_sistema' => $historia->desc_enfermedades_sistema_nervioso,
         'enfermedades_locomotor' => $historia->desc_enfermedades_aparato_icomotor,
         'enfermedades_otras' => $historia->desc_enfermedades_otras,
         'cirugias' => $historia->desc_cirugias,
         'traumaticos' => $historia->desc_traumaticos,
         'antecedentes_alergicos' => $historia->desc_antecedentes_alergicos,
         'examenes_previos' => $historia->desc_examenes_complementarios,
         'estado_general' => $historia->estado_general,
         'peso' => $historia->peso,
         'talla' => $historia->talla,
         'indice_masa' => $historia->masa_corporal,
         'estado_nutricional' => $historia->estado_nutricional,
         'presion_arterial' => $historia->presion_arterial,
         'oxigenacion' => $historia->oxigenacion,
         't_laser' => $historia->t_laser,
         'frecuencia_respiratoria' => $historia->frecuencia_respiratoria,
         'pulso' => $historia->pulso,
         'piel_faneras_fisico' => $historia->piel_faneras_fisico,
         'otorrino' => $historia->otorrino_fisico,
         'mucosas' => $historia->mucosas,
         'cabeza' => $historia->cabeza,
         'cuello' => $historia->cuello,
         'torax' => $historia->torax,
         'aparato_respitarorio' => $historia->aparato_respiratorio_fisico,
         'aparato_cardiovascular' => $historia->aparato_cardiovascular_fisico,
         'abdomen' => $historia->abdomen,
         'genito' => $historia->genito,
         'osteomioarticular' => $historia->osteomioarticular,
         'neurologico' => $historia->neurologico,
         'otros_fisico' => $historia->otros_fisico,
         'analisis_dermatron' => $historia->dermaton_analisis,
         'diagnosticos_presuntivos' => $historia->diagnostico_presuntivos,
         'solicitud_examenes' => $historia->solicitud_examenes,
         'glasgow' => $historia->glasgow,
         'tratamiento_alopatico' => $historia->tratamiento_alopatico,
         'recomendaciones' => $historia->recomendaciones,                
         'evoluciones' => $evoluciones,                
        
        ];
      $pdf = PDF::loadView('myPDF', $data);      
      return $pdf->download('historia_clinica.blade.pdf');
    }
    public function registrar_pacientes(Request $request)
    {

      if (!$request->ajax()) return redirect('/');
      $registrar = new Paciente();
      $registrar->nombres_apellidos = $request->nombres;          
      $registrar->identificacion = $request->identificacion;      
      $registrar->sexo = $request->sexo;      
      $registrar->telefono = $request->telefono;      
      $registrar->save();
      DB::commit();
      return ["data" => "Guardado"];

    }
    public function eliminar_paciente(Request $request)
    {

      if (!$request->ajax()) return redirect('/');
      $eliminar = Paciente::where('id', $request->id)->firstOrFail();    
      $eliminar->delete();    
      DB::commit();
      return ["data" => "Eliminado"];

    }
    public function editar_paciente(Request $request)
    {

      if (!$request->ajax()) return redirect('/');
      $editar = Paciente::where('id', $request->id)->firstOrFail();    
      $editar->nombres_apellidos = $request->nombres;          
      $editar->identificacion = $request->identificacion;      
      $editar->sexo = $request->sexo;      
      $editar->telefono = $request->telefono;      
      $editar->save(); 
      DB::commit();
      return ["data" => "Editado"];

    }
}