<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiDocumentosAnexa extends Model
{
    protected $fillable = [
        'fi_razone_id',
        'i_prm_documento_id',
        'user_crea_id',
        'user_edita_id',
        's_ruta',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
