<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiComposicionFami extends Model
{
    protected $fillable = [
        'i_prm_parentesco_id',
        's_nombre_identitario',
        's_telefono',
        'd_nacimiento',
        'i_prm_ocupacion_id',
        'i_prm_vinculado_idipron_id',
        'i_prm_convive_nnaj_id',
        'sis_nnajnnaj_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
