<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiSustanciaConsumida extends Model
{
    protected $fillable = [
        'fi_consumo_spa_id',
        'i_prm_sustancia_id',
        'i_edad_uso',
        'i_prm_consume_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
