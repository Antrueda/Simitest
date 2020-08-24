<?php

namespace App\Models\Salud\Mitigacion\Logs;

use Illuminate\Database\Eloquent\Model;

class HVspaTablaCuatro extends Model
{
    protected $fillable = [
        'mit_vspa_id',
        'prm_seis_uno_id',
        'prm_seis_dos_id',
        'prm_seis_tres_id',
        'prm_seis_cuatro_id',
        'prm_seis_cinco_id',
        'prm_seis_seis_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
