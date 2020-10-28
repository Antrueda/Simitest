<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdComFamiliar extends Model
{
    protected $fillable = [
        'csd_id',
        's_primer_apellido',
        's_segundo_apellido',
        's_primer_nombre',
        's_segundo_nombre',
        's_nombre_identitario',
        'prm_tipodocu_id',
        's_documento',
        'd_nacimiento',
        'prm_sexo_id',
        'prm_estado_civil_id',
        'prm_identidad_genero_id',
        'prm_orientacion_sexual_id',
        'prm_etnia_id',
        'prm_poblacion_etnia_id',
        'prm_ocupacion_id',
        'prm_parentezco_id',
        'prm_convive_id',
        'prm_visitado_id',
        'prm_vin_actual_id',
        'prm_vin_pasado_id',
        'prm_regimen_id',
        'prm_cualeps_id',
        'sisben',
        'prm_sisben_id',
        'prm_discapacidad_id',
        'prm_cual_id',
        'prm_peso_id',
        'prm_peso_dos_id',
        'prm_leer_id',
        'prm_escribir_id',
        'prm_operaciones_id',
        'prm_aprobado_id',
        'prm_educacion_id',
        'prm_estudia_id',
        'prm_tipofuen_id',
        'prm_convencion_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
