<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiLesicome extends Model
{
    protected $fillable = [
        'fi_violencia_id',
        'prm_lesicome_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 
        'metodoxx', 
        'rutaxxxx', 
        'ipxxxxxx'
    ];
}
