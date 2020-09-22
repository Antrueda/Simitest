<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiDiligenc extends Model
{
    protected $fillable = [
        'diligenc',
        'fi_datos_basico_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'id_old',
        'metodoxx',
        'rutaxxxx',
        'ipxxxxxx'
    ];
}
