<?php

namespace App\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiEduCausa extends Model
{
    protected $fillable = [
        'parametro_id',
        'vsi_educacion_id',
        'user_crea_id',
        'user_edita_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
