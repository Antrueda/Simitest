<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdAlimentacion extends Model
{
    protected $fillable = [
        'csd_id',
        'cant_personas',
        'prm_horario_id',
        'prm_apoyo_id',
        'prm_entidad_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
