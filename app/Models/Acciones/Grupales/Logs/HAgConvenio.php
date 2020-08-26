<?php

namespace App\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgConvenio extends Model
{
    protected $fillable = [
        's_convenio',
        'i_prm_tconvenio_id',
        'i_prm_entidad_id',
        's_descripcion',
        'i_nconvenio',
        'user_crea_id',
        'user_edita_id',
        'd_subscrip',
        'd_terminac',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
