<?php

namespace App\Models\Acciones\Individuales\Salud\Vnutricional;

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\AsignaEnfermedad;
use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class Vnutricion extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'sis_depen_id',
        'fechdili',
        'prm_estado_gesta',
        'edad_gesta',
        'peso',
        'talla',
        'cintura_cc',
        'prm_cod_imcedad',
        'prm_cod_te',
        'prm_acti_fisica',
        'prm_apetito',
        'n_comidas',
        'prm_accion_aume',
        'prm_accion_dism',
        'prm_seg_consumo',
        'prm_diagnostico',
        'observacion',
        'prm_requi_certi',
        'prm_certi_recomen',
        'plan_alimentacion',
        'suplemen_nutri',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'is_seguimiento',
        'vnutricion_id'
    ];

    public function nnaj()
    {
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function intrainstitucional()
    {
        return $this->belongsToMany(Parametro::class, 'vnut_intras', 'vnutricion_id', 'prm_area');
    }

    public function resalimentos()
    {
        return $this->belongsToMany(Parametro::class, 'vnut_calimentos', 'vnutricion_id', 'prm_alimentos')->withPivot('prm_frecuencia');
    }

    public function resenfermedades()
    {
        return $this->belongsToMany(AsignaEnfermedad::class, 'vnut_renfermedades', 'vnutricion_id', 'asigna_enfermedad_id');
    }

    public function vnutricional()
    {
        return $this->belongsTo(Vnutricion::class, 'vnutricion_id');
    }
}
