<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsd extends Model
{
    protected $fillable = [
        'proposito',
        'fecha',
        'user_crea_id',
        'user_edita_id',
        'sis_nnaj_id',
        'prm_tipofuen_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
