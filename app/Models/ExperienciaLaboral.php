<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    protected $table = 'experiencia';
    protected $fillable = [
        'Identificador',
        'NombreReferenciaLaboral',
        'FechaEntradaReferenciaLaboral',
        'FechaSalidaReferenciaLaboral',
        'CargoReferenciaLaboral',
        'PaisReferenciaLaboral',
        'DepartamentoReferenciaLaboral',
        'CiudadReferenciaLaboral',
        'TareasReferenciaLaboral',
        'FuncionesReferenciaLaboral',
        'HabilidadesReferenciaLaboral',
    ];
}
