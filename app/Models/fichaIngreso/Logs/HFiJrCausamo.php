<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiJrCausamo extends Model
{
    protected $table = 'h_fi_jr_causasmos';

    protected $fillable = [
        'parametro_id',
        'fi_justrest_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];

    
}
