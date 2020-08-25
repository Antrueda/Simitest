<?php

namespace app\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdDinfamIncumple extends Model
{
    protected $table = 'h_csd_dinfam_incumple';
    protected $fillable = [
        'parametro_id',
        'csd_dinfamiliar_id',
        'user_crea_id',
        'user_edita_id',
        'prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
