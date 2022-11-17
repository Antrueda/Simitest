<?php

namespace App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast;

use App\Models\User;
use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class Dast extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'fecha',
        'sis_depen_id',
        'prm_requiere_vespa',
        'prm_aplico_vespa',
        'fecha_vespa',
        'accion_desarrolla',
        'prm_patron_con',
        'obs_patron_con',
        'accion_curso',
        'observacion',
        'prm_diligencia',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
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

    public function respuestas()
    {
        return $this->belongsToMany(DastPregunta::class, 'dast_respuestas', 'dast_id', 'dast_pregunta_id');
    }

    public function respuestasPrivot()
    {
        return $this->belongsToMany(DastPregunta::class, 'dast_respuestas', 'dast_id', 'dast_pregunta_id')->withPivot('respuesta');
    }

    public function resultado()
    {
        return $this->hasOne(DastResultado::class, 'dast_id');
    }

    public function getFechaAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public function getFechaVespaAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
}
