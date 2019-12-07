<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiEducacion extends Model{
	protected $fillable = ['vsi_id', 'prm_estudia_id', 'dia', 'mes', 'ano', 'prm_motivo_id', 'prm_rendimiento_id', 'prm_dificultad_id', 'prm_leer_id', 'prm_escribir_id', 'descripcion', 'user_crea_id', 'user_edita_id', 'activo'];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function estudia(){
        return $this->belongsTo(Parametro::class, 'prm_estudia_id');
    }

    public function motivo(){
        return $this->belongsTo(Parametro::class, 'prm_motivo_id');
    }

    public function rendimiento(){
        return $this->belongsTo(Parametro::class, 'prm_rendimiento_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function leer(){
        return $this->belongsTo(Parametro::class, 'prm_leer_id');
    }

    public function escribir(){
        return $this->belongsTo(Parametro::class, 'prm_escribir_id');
    }

    public function causas(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_causa', 'vsi_educacion_id', 'parametro_id');
    }

    public function fortalezas(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_fortaleza', 'vsi_educacion_id', 'parametro_id');
    }

    public function dificultades(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_dificultad', 'vsi_educacion_id', 'parametro_id');
    }

    public function dificultadesa(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_diftipo_a', 'vsi_educacion_id', 'parametro_id');
    }

    public function dificultadesb(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_diftipo_b', 'vsi_educacion_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}