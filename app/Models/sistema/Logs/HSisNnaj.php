<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisNnaj extends Model
{
    protected $fillable = [
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'simianti_id',
        'prm_nuevoreg_id',
        'prm_escomfam_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
