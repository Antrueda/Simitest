<?php

namespace App\Models\Usuario\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisAreaUsua extends Model
{
    protected $fillable = [
        'area_id',
        'user_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}