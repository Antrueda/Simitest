<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiPotencialidad extends Model
{
    protected $fillable = [
        'vsi_id',
        'potencialidad',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
