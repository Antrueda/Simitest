<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HPost extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'user_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
