<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    protected $table = 'hoja_vida_experiencia';
    protected $fillable = [
        'Identificador',
        'NombreReferenciaLaboral',
        'FechaEntradaReferenciaLaboral',
        'FechaSalidaReferenciaLaboral',
        'CargoReferenciaLaboral',
        'PaisReferenciaLaboral',
        'DepartamentoReferenciaLaboral',
        'CiudadReferenciaLaboral',
        'FuncionesReferenciaLaboral',
        'HabilidadesReferenciaLaboral',
    ];
}
