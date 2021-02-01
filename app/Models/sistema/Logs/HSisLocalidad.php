<?php

namespace App\Models\Sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisLocalidad extends Model
{
    protected $fillable = [
        's_localidad',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id','simianti_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
