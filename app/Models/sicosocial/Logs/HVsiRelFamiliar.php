<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiRelFamiliar extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_representativa_id',
        'representativa',
        'prm_mala_id',
        'prm_relacion_id',
        'prm_gusto_id',
        'porque',
        'prm_familia_id',
        'prm_denuncia_id',
        'descripcion',
        'prm_pareja_id',
        'prm_dificultad_id',
        'dia',
        'mes',
        'ano',
        'prm_responde_id',
        'descripcion1',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];    

}
