<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiContacto extends Model
{
    protected $fillable = [
        'i_prm_tipo_contacto_id',
        's_contacto_condicion',
        'i_prm_contacto_opcion_id',
        's_entidad_remite',
        'd_fecha_remite_id',
        'i_prm_motivo_contacto_id',
        'i_prm_aut_tratamiento_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
