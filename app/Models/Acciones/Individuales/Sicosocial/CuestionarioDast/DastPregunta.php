<?php

namespace App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast;

use Illuminate\Database\Eloquent\Model;

class DastPregunta extends Model
{
    protected $fillable = [
        'id',
        'pregunta',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
