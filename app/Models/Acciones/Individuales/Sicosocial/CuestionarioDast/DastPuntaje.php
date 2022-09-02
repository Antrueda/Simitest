<?php

namespace App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast;

use Illuminate\Database\Eloquent\Model;

class DastPuntaje extends Model
{
    protected $fillable = [
        'id',
        'minimo',
        'superior',
        'grado_problema',
        'accion_id',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
