<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdDatosBasico extends Model
{
    protected $fillable = [
        'csd_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        's_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido',
        's_nombre_identitario', 's_apodo', 'prm_sexo_id', 'prm_identidad_genero_id', 'prm_orientacion_sexual_id', 'd_nacimiento',
        'sis_pai_id', 'sis_departamento_id', 'sis_municipio_id',
        'prm_tipodocu_id', 'prm_doc_fisico_id', 'prm_ayuda_id', 's_documento',
        'sis_paiexp_id', 'sis_departamentoexp_id', 'sis_municipioexp_id',
        'prm_gsanguino_id', 'prm_factor_rh_id', 'prm_situacion_militar_id', 'prm_clase_libreta_id',
        'prm_estado_civil_id', 'prm_etnia_id', 'prm_poblacion_etnia_id', 'prm_tipoblaci_id','prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}


