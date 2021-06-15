<?php

namespace App\Models\Sistema\Logs;

use Illuminate\Database\Eloquent\Relations\Pivot;

class HAreaUser extends Pivot
{
    protected $fillable = [
        'area_id',
        'user_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
