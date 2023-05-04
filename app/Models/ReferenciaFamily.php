<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenciaFamily extends Model
{
    protected $table = 'hoja_vida_ref_family';
    protected $fillable = [
        'Identificador',
        'NombreReferenciaPersonal',
        'CargoReferenciaPersonal',
        'TelReferenciaPersonal',
        'PaisReferenciaPersonal',
        'DepartamentoReferenciaPersonal',
        'CiudadReferenciaPersonal',
    ];
}
