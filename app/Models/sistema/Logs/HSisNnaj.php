<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisNnaj extends Model
{
    protected $fillable = [
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
