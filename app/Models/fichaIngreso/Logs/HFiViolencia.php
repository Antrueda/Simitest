<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiViolencia extends Model
{
    protected $fillable = [
        'i_prm_presenta_violencia_id',
        'i_prm_familiar_fisica_id',
        'i_prm_amistad_fisica_id',
        'i_prm_pareja_fisica_id',
        'i_prm_comunidad_fisica_id',
        'i_prm_familiar_psico_id',
        'i_prm_amistad_psico_id',
        'i_prm_pareja_psico_id',
        'i_prm_comunidad_psico_id',
        'i_prm_familiar_sexual_id',
        'i_prm_amistad_sexual_id',
        'i_prm_pareja_sexual_id',
        'i_prm_comunidad_sexual_id',
        'i_prm_familiar_econo_id',
        'i_prm_amistad_econo_id',
        'i_prm_pareja_econo_id',
        'i_prm_comunidad_econo_id',
        'i_prm_violencia_genero_id',
        'i_prm_condicion_presenta_id',
        'i_prm_depto_condicion_id',
        'i_prm_municipio_condicion_id',
        'i_prm_tiene_certificado_id',
        'i_prm_depto_certifica_id',
        'i_prm_municipio_certifica_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
