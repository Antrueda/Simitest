<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiActEmocional extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_activa_id',
        'descripcion',
        'conductual',
        'cognitiva',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];        
}