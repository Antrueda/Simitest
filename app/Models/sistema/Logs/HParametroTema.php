<?php

namespace app\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HParametroTema extends Model
{
    protected $fillable = [
        'parametro_id',
        'tema_id',
        'user_crea_id',
        'user_edita_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
