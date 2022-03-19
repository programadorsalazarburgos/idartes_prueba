<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'tbl_pacientes';
    protected $fillable = [
        'nombres_apellidos',
        'fecha_hora',
        'identificacion',
        'edad',
        'sexo',
        'fecha_nacimiento',
        'estado_civil',
        'eps',
        'acompaniante',
        'procedencia',
        'ocupacion',
        'telefono'
    ];
}
