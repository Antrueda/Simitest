<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HAeEncuentro extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'sis_depen_id',
        'sis_servicio_id',
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
        'observaciones', 'sis_esta_id', 'user_crea_id', 'user_edita_id'
    ];

    protected $table = 'h_ae_encuentros';
}
