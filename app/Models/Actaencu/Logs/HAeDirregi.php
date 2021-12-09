<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HAeDirregi extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ae_asistencia_id',
        'i_prm_tipo_via_id',
        's_complemento',
        's_nombre_via',
        'i_prm_alfabeto_via_id',
        'i_prm_tiene_bis_id',
        'i_prm_bis_alfabeto_id',
        'i_prm_cuadrante_vp_id',
        'i_via_generadora',
        'i_prm_alfabetico_vg_id',
        'i_placa_vg',
        'i_prm_cuadrante_vg_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'id_old', 
        'metodoxx', 
        'rutaxxxx', 
        'ipxxxxxx'
    ];
    protected $table = 'h_ae_dirregis';
}
