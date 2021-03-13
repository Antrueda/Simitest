<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiSituVulnera extends Model
{
    protected $table = 'h_fi_situ_vulnera';
    protected $fillable = [
        'fi_situacion_especial_id',
        'prm_situacion_vulnera_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
