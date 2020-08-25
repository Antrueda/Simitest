<?php

namespace app\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisTcampo extends Model
{
    protected $fillable = [
        's_campo',
        's_numero',
        'sis_tabla_id',
        'in_pregunta_id',
        'tema_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
