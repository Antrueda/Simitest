<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdJusticia extends Model
{
    protected $fillable = [
        'csd_id',
        'prm_vinculado_id',
        'prm_vin_causa_id',
        'prm_riesgo_id',
        'prm_rie_causa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
