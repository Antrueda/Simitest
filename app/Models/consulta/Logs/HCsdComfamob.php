<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdComfamob extends Model
{
    protected $fillable = [
        'csd_com_familiar_id', 'observaciones', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
