<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiResidencia extends Model
{
    protected $fillable = [
        'i_prm_tiene_dormir_id',
        'i_prm_tipo_duerme_id',
        'i_prm_tipo_tenencia_id',
        'i_prm_tipo_direccion_id',
        'i_prm_zona_direccion_id',
        'i_prm_tipo_via_id',
        's_nombre_via',
        'i_prm_alfabeto_via_id',
        'i_prm_tiene_bis_id',
        'i_prm_bis_alfabeto_id',
        'i_prm_cuadrante_vp_id',
        'i_via_generadora',
        'i_prm_alfabetico_vg_id',
        'i_placa_vg',
        'i_prm_cuadrante_vg_id',
        'i_prm_estrato_id',
        'i_prm_espacio_parcha_id',
        's_nombre_espacio_parcha',
        's_complemento',
        'sis_localidad_id',
        'sis_upz_id',
        'sis_barrio_id',
        's_telefono_uno',
        's_telefono_dos',
        's_telefono_tres',
        's_email_facebook',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
