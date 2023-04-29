<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HojaVida extends Model
{
    protected $table = 'Hoja_Vida';
    protected $fillable = [
        'Nombre','Cargo','Idioma','Celular','Fijo','Correo','Ubicacion','PerfilProfesional','Habilidades','Database'
    ];
}
