<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiConsumoExpectativa extends Model
{
    protected $table = 'h_vsi_consumo_espectativa';
    protected $fillable = [
        'parametro_id',
        'vsi_consumo_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
