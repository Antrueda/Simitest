<?php

namespace App\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgRecurso extends Model
{
    protected $fillable = [
        's_recurso',
        'i_prm_trecurso_id',
        'i_prm_umedida_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
