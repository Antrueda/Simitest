<?php

namespace App\Models\Indicadores\Administ\Logs;
use Illuminate\Database\Eloquent\Model;

class HInPregresp extends Model
{
    protected $fillable = [
        'in_grupregu_id',
        'prm_respuest_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
