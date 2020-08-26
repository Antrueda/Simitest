<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdGeningAporta extends Model
{
    protected $fillable = [
        'csd_id',
        'prm_aporta_id',
        'mensual',
        'aporte',
        'jornada_entre',
        'prm_entre_id',
        'jornada_a',
        'prm_a_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
