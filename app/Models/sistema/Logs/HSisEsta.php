<?php

namespace app\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisEsta extends Model
{
    protected $fillable = [
        's_estado',
        'i_estado',
        'user_crea_id',
        'user_edita_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
