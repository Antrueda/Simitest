<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiEducacion extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_estudia_id',
        'dia',
        'mes',
        'ano',
        'prm_motivo_id',
        'prm_rendimiento_id',
        'prm_dificultad_id',
        'prm_leer_id',
        'prm_escribir_id',
        'descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
