<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiNucleoFamiliar extends Model
{
    protected $fillable = [
        'i_en_uso',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
               
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];        
}