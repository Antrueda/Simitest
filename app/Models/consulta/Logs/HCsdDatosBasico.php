<?php

namespace app\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdDatosBasico extends Model
{
    protected $fillable = [
        'csd_id',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'identitario',
        'apodo',
        'prm_sexo_id',
        'prm_genero_id',
        'prm_sexual_id',
        'nacimiento',
        'pais_id',
        'departamento_id',
        'municipio_id',
        'prm_documento_id',
        'prm_doc_fisico_id',
        'prm_sin_fisico_id',
        'documento',
        'pais_docum_id',
        'departamento_docum_id',
        'municipio_docum_id',
        'prm_gruposang_id',
        'prm_factorsang_id',
        'prm_militar_id',
        'prm_libreta_id',
        'prm_civil_id',
        'prm_etnia_id',
        'prm_cual_id',
        'prm_poblacion_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
