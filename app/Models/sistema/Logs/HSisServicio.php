<?php

namespace App\Models\Sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisServicio extends Model
{
    protected $fillable = [
        's_servicio',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
