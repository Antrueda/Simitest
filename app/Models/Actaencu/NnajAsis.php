<?php

namespace App\Models\Actaencu;

use app\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NnajAsis extends Model
{
    use SoftDeletes;

    protected $table = 'ae_asisnnajdatauxs';

    protected $fillable = [
        'fi_datos_basico_id',
        's_nombre_identitario',
        'prm_tipodocu_id',
        'prm_doc_fisico_id',
        'prm_ayuda_id',
        's_documento',
        'd_nacimiento',
        'aniosxxx',
        'sis_localidad_id',
        'sis_upz_id',
        'sis_upzbarri_id',

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

        's_telefono_uno',
        'prm_tipoblaci_id',
        'prm_pefil_id',
        'prm_lugar_focali_id',
        'prm_autorizo_id',
        'observaciones',
    ];

    public function sisNnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
