<?php

namespace app\Models\Usuario\Logs;

use Illuminate\Database\Eloquent\Model;

class HRolUsuario extends Model
{
    protected $fillable = [
        'role_id',
        'model_type',
        'model_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'deleted_at',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}