<?php

namespace App\Models\Educacion\Administ\Pruediag;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EdaAsignatuEdaGrado extends Pivot
{
    protected $fillable = [
        'eda_asignatu_id',
        'eda_grado_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
      ];
}
