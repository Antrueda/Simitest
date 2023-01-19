<?php

namespace App\Models\Acciones\Individuales\Salud\Vsmedmac;

use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class Vsmedmac extends Model
{
    protected $fillable = [
       'sis_nnaj_id',
       /*  'sis_servicio_id',
        'sis_localidad_id',
        'sis_upz_id',
        'fechdili',
        'sis_barrio_id',
        'prm_accion_id',
        'prm_actividad_id',
        'user_contdili_id',
        'user_funcontr_id',
        'respoupi_id',
        'objetivo',
        'desarrollo_actividad',
        'metodologia',
        'observaciones', 'sis_esta_id', 'user_crea_id', 'user_edita_id'*/
    ];

    public function sisNnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }
}
