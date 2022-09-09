<?php

namespace App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast;

use Illuminate\Database\Eloquent\Model;

class DastResultado extends Model
{
    protected $fillable = [
        'id',
        'dast_id',
        'resultado',
        'valores',
        'grado_problema',
        'accion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
