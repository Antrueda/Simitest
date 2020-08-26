<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiSitespRiesgo extends Model
{
    protected $table = 'h_vsi_sitesp_riesgo';
    protected $fillable = [
        'parametro_id',
        'vsi_sitespecial_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
