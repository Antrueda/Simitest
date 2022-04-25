<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GePrograma extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_programa';
    protected $primaryKey = 'id_programa';

    protected $fillable = [
        'id_programa',
        'nombre',
        'descripcion',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'id_modulo',
        'estado',
        'upi',
        'prioridad',
        
    ];
}
