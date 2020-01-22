<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class CsdGenIngreso extends Model{
	protected $fillable = ['csd_id', 'observacion', 'prm_actividad_id', 'trabaja', 'prm_informal_id', 'prm_otra_id', 'prm_laboral_id', 'prm_frecuencia_id', 'intensidad', 'prm_dificultad_id', 'razon', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
    ];
  
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function actividad(){
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }

    public function informal(){
        return $this->belongsTo(Parametro::class, 'prm_informal_id');
    }

    public function otra(){
        return $this->belongsTo(Parametro::class, 'prm_otra_id');
    }

    public function laboral(){
        return $this->belongsTo(Parametro::class, 'prm_laboral_id');
    }

    public function frecuencia(){
        return $this->belongsTo(Parametro::class, 'prm_frecuencia_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}