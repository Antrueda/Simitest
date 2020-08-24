<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiRedApoyoActual extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'i_prm_tipo_red_id',
        's_nombre_persona',
        's_servicio',
        's_telefono',
        's_direccion',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
