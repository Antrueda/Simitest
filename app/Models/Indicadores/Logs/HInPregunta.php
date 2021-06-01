<?php

namespace App\Models\Indicadores\Logs;

use Illuminate\Database\Eloquent\Model;

class HInPregunta extends Model
{
    protected $fillable = [
        'in_libagrup_id',
        'temacombo_id',
        'user_edita_id',
        'user_crea_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
