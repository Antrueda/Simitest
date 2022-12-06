<?php

namespace App\Models\Acciones\Individuales\Salud\Labrrd;

use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisDepen;
use Illuminate\Database\Eloquent\Model;

class LabrrdSeg extends Model
{
    protected $fillable = [
        'labrrd_id',
        'fechdili',
        'sis_origen_id',
        'sis_atenc_id',
        'prm_faseacomp',
        'observacion_pro',
        'num_sesion',
        'lugar_externo',
        'observacion_afront',
        'observacion_impu',
        'observacion_violen',
        'observacion_auto',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function labrrd()
    {
        return $this->belongsTo(Labrrd::class, 'labrrd_id');
    }

    public function upiOrigen()
    {
        return $this->belongsTo(SisDepen::class, 'sis_origen_id');
    }

    public function habilidades()
    {
        return $this->belongsToMany(Parametro::class, 'labrrd_seg_habilis', 'labrrd_seg_id', 'prm_habilidad_id');
    }

    public function resultadoAnalisis()
    {
        return $this->belongsToMany(LabrrdComponente::class, 'labrrd_seg_analis', 'labrrd_seg_id', 'labrrd_componente_id');
    }

    public function resultadoAnalisisPrivot()
    {
        return $this->belongsToMany(LabrrdComponente::class, 'labrrd_seg_analis', 'labrrd_seg_id', 'labrrd_componente_id')->withPivot('respuesta');
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
