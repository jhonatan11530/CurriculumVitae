<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoporteEstudioModel extends Model
{
    protected $table = 'soporte_estudio';
    protected $fillable = [
        'Fecha','Institucion','NombreTitulo','TipoEstudio','SoporteFisico'
    ];
}
