<?php

namespace app\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdAlimentFrec extends Model
{
    protected $table = 'h_csd_aliment_frec';
    protected $fillable = [
        'parametro_id',
        'csd_alimentacion_id',
        'user_crea_id',
        'user_edita_id',
        'prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
