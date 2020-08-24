<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiConsumoSpa extends Model
{
    protected $fillable = [
        'i_prm_consume_spa_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
