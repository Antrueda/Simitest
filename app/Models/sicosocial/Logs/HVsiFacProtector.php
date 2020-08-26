<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiFacProtector extends Model
{
    protected $fillable = [
        'vsi_id', 'protector', 'sis_esta_id', 'user_crea_id', 'user_edita_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
