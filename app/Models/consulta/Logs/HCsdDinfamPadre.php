<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdDinfamPadre extends Model
{
    protected $fillable = [
        'csd_id',
        'prm_convive_id',
        'dia',
        'mes',
        'ano',
        'hijo',
        'prm_separa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
