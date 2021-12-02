<?php

namespace App\Models\Educacion\Administ\Pruediag;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EdaAsignatuEdaPresaber extends Pivot
{
    protected $fillable = [
        'eda_asignatu_id',
        'eda_presaber_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
      ];
}
