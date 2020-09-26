<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HComfacsd extends Model
{
    protected $fillable = [
        'fi_compfami_id', 
        'csd_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
