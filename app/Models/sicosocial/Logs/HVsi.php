<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsi extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 'sis_depen_id', 'fecha', 'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}