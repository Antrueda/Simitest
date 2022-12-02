<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionSicorrd;

use App\Models\User;
use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdSintoma;

class Vsrrd extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'fecha',
        'sis_origen_id',
        'sis_atenc_id',
        'prm_pre_mitigacion',
        'prm_faseacomp',
        'prm_tipoacomp',
        'prm_actiemocional',
        'observacion',
        'concepto_rrd',
        'prm_requi_certi',
        'requi_certi_recomend',
        'num_sesion',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function nnaj()
    {
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function resultSintomas()
    {
        return $this->belongsToMany(VsrrdSintoma::class, 'vsrrd_sinto_res', 'vsrrd_id', 'vsrrd_Sintoma_id');
    }

    public function resultSintomasPrivot()
    {
        return $this->belongsToMany(VsrrdSintoma::class, 'vsrrd_sinto_res', 'vsrrd_id', 'vsrrd_Sintoma_id')->withPivot('respuesta');
    }

    public function resultFactores()
    {
        return $this->belongsToMany(VsrrdEntorFactor::class, 'vsrrd_fact_resuls', 'vsrrd_id', 'vsrrd_entor_fact_id');
    }

    public function resultFactoresPrivot()
    {
        return $this->belongsToMany(VsrrdEntorFactor::class, 'vsrrd_fact_resuls', 'vsrrd_id', 'vsrrd_entor_fact_id')->withPivot('escala');
    }

    public function resultEntornosep()
    {
        return $this->belongsToMany(VsrrdEntorno::class, 'vsrrd_entep_resuls', 'vsrrd_id', 'vsrrd_entorno_id');
    }

    public function resultEntornosepPrivot()
    {
        return $this->belongsToMany(VsrrdEntorno::class, 'vsrrd_entep_resuls', 'vsrrd_id', 'vsrrd_entorno_id')->withPivot('respuesta');
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
}
