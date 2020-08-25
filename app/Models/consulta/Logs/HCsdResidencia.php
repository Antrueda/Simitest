<?php

namespace app\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdResidencia extends Model
{
    protected $fillable = [
        'csd_id',
        'prm_tipo_id',
        'prm_es_id',
        'prm_dir_tipo_id',
        'prm_dir_zona_id',
        'prm_dir_via_id',
        'dir_nombre',
        'prm_dir_alfavp_id',
        'prm_dir_bis_id',
        'prm_dir_alfabis_id',
        'prm_dir_cuadrantevp_id',
        'dir_generadora',
        'prm_dir_alfavg_id',
        'dir_placa',
        'prm_dir_cuadrantevg_id',
        'prm_estrato_id',
        'dir_complemento',
        'sis_upzbarri_id',
        'telefono_uno',
        'telefono_dos',
        'telefono_tres',
        'email',
        'prm_piso_id',
        'prm_muro_id',
        'prm_higiene_id',
        'prm_ventilacion_id',
        'prm_iluminacion_id',
        'prm_orden_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
