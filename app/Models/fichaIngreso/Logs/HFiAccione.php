<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiAccione extends Model
{
    protected $fillable = [
        'fi_actividadestl_id',
        'prm_accione_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old',
        'metodoxx',
        'rutaxxxx',
        'ipxxxxxx'
      ];
}
