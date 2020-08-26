<?php

namespace App\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdSisNnaj extends Model
{
    protected $table = 'h_csd_sis_nnaj';
    protected $fillable = [
        'csd_id',
        'sis_nnaj_id',
        'user_crea_id',
        'prm_tipofuen_id',
        'user_edita_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
