<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiContviol extends Model
{
    protected $fillable = [
        'fi_violencia_id',
        'prm_violenci_id',
        'prm_contexto_id',
        'prm_respuest_id',
        'tema_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 
        'metodoxx', 
        'rutaxxxx', 
        'ipxxxxxx'
    ];
}
