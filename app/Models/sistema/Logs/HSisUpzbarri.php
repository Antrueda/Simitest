<?php

namespace app\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisUpzbarri extends Model
{
    protected $fillable = [
        'sis_localupz_id',
        'sis_barrio_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}