<?php

namespace app\Models\Salud\Mitigacion\Logs;

use Illuminate\Database\Eloquent\Model;

class HVspaTablaTres extends Model
{
    protected $fillable = [
        'mit_vspa_id',
        'prm_cinco_uno_id',
        'prm_cinco_dos_id',
        'prm_cinco_tres_id',
        'prm_cinco_cuatro_id',
        'prm_cinco_cinco_id',
        'prm_cinco_seis_id',
        'prm_cinco_siete_id',
        'prm_cinco_ocho_id',
        'prm_cinco_nueve_id',
        'prm_cinco_diez_id',
        'prm_cinco_once_id',
        'prm_cinco_doce_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
