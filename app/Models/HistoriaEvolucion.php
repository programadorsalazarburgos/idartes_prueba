<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaEvolucion extends Model
{
    use HasFactory;
    protected $table = 'tb_historia_evolucion';
    protected $fillable = [
        'evolucion',
        'paciente_id'
      
    ];
}