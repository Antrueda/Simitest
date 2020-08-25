<?php

namespace app\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HTema extends Model
{
    protected $fillable = [
        'nombre',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                       
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}