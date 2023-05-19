<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenciaJobs extends Model
{
    protected $table = 'hoja_vida_ref_jobs';
    protected $fillable = [
        'Identificador',
        'NombreReferenciaJobs',
        'CargoReferenciaJobs',
        'TelReferenciaJobs',
        'PaisReferenciaJobs',
        'DepartamentoReferenciaJobs',
        'CiudadReferenciaJobs',
    ];
}
