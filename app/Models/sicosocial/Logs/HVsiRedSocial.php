<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiRedSocial extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_presenta_id',
        'prm_protector_id',
        'prm_dificultad_id',
        'prm_quien_id',
        'prm_ruptura_genero_id',
        'prm_ruptura_sexual_id',
        'prm_acceso_id',
        'prm_servicio_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}