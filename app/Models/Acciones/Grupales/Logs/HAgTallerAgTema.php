<?php

namespace App\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgTallerAgTema extends Model
{
    protected $fillable = [
        'ag_taller_id',
        'ag_tema_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
