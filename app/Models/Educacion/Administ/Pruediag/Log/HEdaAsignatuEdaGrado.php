<?php

namespace App\Models\Educacion\Administ\Pruediag\Log;

use Illuminate\Database\Eloquent\Relations\Pivot;

class HEdaAsignatuEdaGrado extends Pivot
{
    protected $fillable = [
        'eda_asignatu_id',
        'eda_grado_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old',
        'metodoxx',
        'rutaxxxx',
        'ipxxxxxx'
      ];
}
