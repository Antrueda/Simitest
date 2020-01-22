<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiEstEmocional extends Model{
	protected $fillable = ['vsi_id', 'prm_siente_id', 'prm_contexto_id', 'descripcion_siente', 'prm_reacciona_id', 'descripcion_reacciona', 'descripcion_adecuado', 'descripcion_dificulta', 'prm_estresante_id', 'descripcion_estresante', 'prm_morir_id', 'dia_morir', 'mes_morir', 'ano_morir', 'prm_pensamiento_id', 'prm_amenaza_id', 'prm_intento_id', 'ideacion', 'amenaza', 'intento', 'prm_riesgo_id', 'dia_ultimo', 'mes_ultimo', 'ano_ultimo', 'descripcion_motivo', 'prm_lesiva_id', 'descripcion_lesiva', 'prm_sueno_id', 'dia_sueno', 'mes_sueno', 'ano_sueno', 'descripcion_sueno', 'prm_alimenticio_id', 'dia_alimenticio', 'mes_alimenticio', 'ano_alimenticio', 'descripcion_alimenticio', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function siente(){
        return $this->belongsTo(Parametro::class, 'prm_siente_id');
    }

    public function contexto(){
        return $this->belongsTo(Parametro::class, 'prm_contexto_id');
    }

    public function reacciona(){
        return $this->belongsTo(Parametro::class, 'prm_reacciona_id');
    }

    public function estresante(){
        return $this->belongsTo(Parametro::class, 'prm_estresante_id');
    }

    public function morir(){
        return $this->belongsTo(Parametro::class, 'prm_morir_id');
    }

    public function pensamiento(){
        return $this->belongsTo(Parametro::class, 'prm_pensamiento_id');
    }

    public function amenaza(){
        return $this->belongsTo(Parametro::class, 'prm_amenaza_id');
    }

    public function intento(){
        return $this->belongsTo(Parametro::class, 'prm_intento_id');
    }

    public function riesgo(){
        return $this->belongsTo(Parametro::class, 'prm_riesgo_id');
    }

    public function lesiva(){
        return $this->belongsTo(Parametro::class, 'prm_lesiva_id');
    }

    public function sueno(){
        return $this->belongsTo(Parametro::class, 'prm_sueno_id');
    }

    public function alimenticio(){
        return $this->belongsTo(Parametro::class, 'prm_alimenticio_id');
    }

    public function adecuados(){
        return $this->belongsToMany(Parametro::class,'vsi_estemo_adecuado', 'vsi_estemocional_id', 'parametro_id');
    }

    public function dificultades(){
        return $this->belongsToMany(Parametro::class,'vsi_estemo_dificulta', 'vsi_estemocional_id', 'parametro_id');
    }

    public function estresantes(){
        return $this->belongsToMany(Parametro::class,'vsi_estemo_estresante', 'vsi_estemocional_id', 'parametro_id');
    }

    public function motivos(){
        return $this->belongsToMany(Parametro::class,'vsi_estemo_motivo', 'vsi_estemocional_id', 'parametro_id');
    }

    public function lesivas(){
        return $this->belongsToMany(Parametro::class,'vsi_estemo_lesiva', 'vsi_estemocional_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}