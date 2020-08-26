<?php

namespace App\Models\Salud\Mitigacion\Logs;

use Illuminate\Database\Eloquent\Model;

class HVspaTablaDos extends Model
{
    protected $fillable = [
        'mit_vspa_id',
        'prm_cuatro_uno_id',
        'prm_cuatro_dos_id',
        'prm_cuatro_tres_id',
        'prm_cuatro_cuatro_id',
        'prm_cuatro_cinco_id',
        'prm_cuatro_seis_id',
        'prm_cuatro_siete_id',
        'prm_cuatro_ocho_id',
        'prm_cuatro_nueve_id',
        'prm_cuatro_diez_id',
        'prm_cuatro_once_id',
        'prm_cuatro_doce_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
