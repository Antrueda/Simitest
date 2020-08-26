<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiDatosBasico extends Model
{
    protected $fillable = [
        's_primer_nombre',
        's_segundo_nombre',
        's_primer_apellido',
        's_segundo_apellido',
        'prm_poblacion_id',
        's_documento',
        'prm_documento_id',
        'prm_doc_fisico_id',
        'sis_municipioexp_id',
        'prm_sexo_id',
        's_apodo',
        's_nombre_identitario',
        'd_nacimiento',
        'sis_municipio_id',
        'prm_gsanguino_id',
        'prm_factor_rh_id',
        'sis_nnaj_id',
        'fi_nucleo_familiar_id',
        'prm_estado_civil_id',
        'prm_situacion_militar_id',
        'prm_clase_libreta_id',
        'i_prm_ayuda_id',
        'prm_identidad_genero_id',
        'prm_orientacion_sexual_id',
        'prm_etnia_id',
        'prm_poblacion_etnia_id',
        'prm_vestimenta_id',
        's_nombre_focalizacion',
        's_lugar_focalizacion',
        'sis_upzbarri_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'sis_pai_id',
        'sis_departamento_id',
        'sis_paiexp_id',
        'sis_departamentoexp_id',
        'i_prm_linea_base_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
