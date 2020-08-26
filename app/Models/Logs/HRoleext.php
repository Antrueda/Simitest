<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HRoleext extends Model
{
    protected $fillable = [
        'name',
        'guard_name',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                       
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}