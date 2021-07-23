<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Relations\Pivot;

class HParametroTema extends Pivot
{
    protected $table = 'h_parametro_temacombo';
    protected $fillable = [
        'parametro_id',
        'temacombo_id',
        'user_crea_id',
        'user_edita_id',
        'simianti_id',
         'metodoxx',
         'rutaxxxx',
         'ipxxxxxx'
    ];
}
