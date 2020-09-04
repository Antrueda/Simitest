<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiVictataq extends Model
{
    protected $fillable = [
        'fi_salud_id',
        'prm_victataq_id',
        'id_old',
        'metodoxx',
        'rutaxxxx',
        'ipxxxxxx',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}
