<?php

namespace App\Models\Indicadores\Administ\Logs;

use Illuminate\Database\Eloquent\Model;

class HInIndicado extends Model
{
    protected $fillable = [
        's_indicador',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old',
        'metodoxx',
        'rutaxxxx',
        'ipxxxxxx'
    ];
}
