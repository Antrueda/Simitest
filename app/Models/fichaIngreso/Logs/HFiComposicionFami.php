<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiComposicionFami extends Model
{
    protected $fillable = [
        'i_prm_parentesco_id',
        's_primer_nombre',
        's_segundo_nombre',
        's_primer_apellido',
        's_segundo_apellido',
        's_nombre_identitario',
        's_telefono',
        's_documento',
        'd_nacimiento',
        'i_prm_ocupacion_id',
        'sis_municipio_id',
        'i_prm_vinculado_idipron_id',
        'i_prm_convive_nnaj_id',
        'prm_documento_id',
        'nnaj_nfamili_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
