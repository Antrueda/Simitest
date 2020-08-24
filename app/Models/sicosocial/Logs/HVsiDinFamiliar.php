<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiDinFamiliar extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_familiar_id',
        'prm_hogar_id',
        'lugar',
        'prm_motivo_id',
        's_doc_adjunto',
        'descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
