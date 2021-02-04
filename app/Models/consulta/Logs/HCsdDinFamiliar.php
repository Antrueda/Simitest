<?php

namespace App\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdDinFamiliar extends Model
{
    protected $fillable = [
        'csd_id',
        'descripcion',
        'relevantes',
        'prm_familiar_id',
        'prm_hogar_id',
        'descripciona',
        'prm_bogota_id',
        'prm_traslado_id',
        'jefea',
        's_doc_adjunto',
        'prm_jefea_id',
        'jefeb',
        'prm_jefeb_id',
        'descripcionb',
        'prm_cuidador_id',
        'descripcionc',
        'afronta',
        'prm_norma_id',
        'prm_conoce_id',
        'observacion',
        'prm_actuan_id',
        'porque',
        'prm_solucion_id',
        'prm_problema_id',
        'prm_destaca_id',
        'prm_positivo_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
