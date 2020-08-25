<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiConsumo extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_consumo_id',
        'cantidad',
        'inicio',
        'prm_contexto_ini_id',
        'prm_consume_id',
        'prm_contexto_man_id',
        'prm_problema_id',
        'porque',
        'prm_motivo_id',
        'prm_expectativa_id',
        'prm_familia_id',
        'descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}