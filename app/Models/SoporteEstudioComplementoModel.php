<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoporteEstudioComplementoModel extends Model
{
    protected $table = 'soporte_estudio_complemento';
    protected $fillable = [
        'Fecha','Institucion','NombreTitulo','TipoEstudio','SoporteFisico'
    ];
}
