<?php

namespace App\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdResideambiente extends Model
{
    protected $table = 'h_csd_reside_ambiente';
    protected $fillable = [
        'parametro_id',
        'csd_residencia_id',
        'user_crea_id',
        'user_edita_id',
        'prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
