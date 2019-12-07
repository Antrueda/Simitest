<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiAbuSexual extends Model{
	protected $fillable = [
        'vsi_id', 'prm_evento_id', 'dia', 'mes', 'ano', 'prm_momento_id', 'prm_persona_id', 'prm_tipo_id', 'dia_ult', 'mes_ult', 'ano_ult', 'prm_momento_ult_id', 'prm_persona_ult_id', 'prm_tipo_ult_id', 'prm_convive_id', 'prm_presencia_id', 'prm_reconoce_id', 'prm_apoyo_id', 'prm_denuncia_id', 'prm_terapia_id', 'prm_estado_id', 'informacion', 'user_crea_id', 'user_edita_id', 'activo',
    ];
  
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function evento(){
        return $this->belongsTo(Parametro::class, 'prm_evento_id');
    }

    public function momento(){
        return $this->belongsTo(Parametro::class, 'prm_momento_id');
    }

    public function persona(){
        return $this->belongsTo(Parametro::class, 'prm_persona_id');
    }

    public function tipo(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_id');
    }

    public function momentoUlt(){
        return $this->belongsTo(Parametro::class, 'prm_momento_ult_id');
    }

    public function personaUlt(){
        return $this->belongsTo(Parametro::class, 'prm_persona_ult_id');
    }

    public function tipoUlt(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_ult_id');
    }

    public function convive(){
        return $this->belongsTo(Parametro::class, 'prm_convive_id');
    }

    public function presencia(){
        return $this->belongsTo(Parametro::class, 'prm_presencia_id');
    }

    public function reconoce(){
        return $this->belongsTo(Parametro::class, 'prm_reconoce_id');
    }

    public function apoyo(){
        return $this->belongsTo(Parametro::class, 'prm_apoyo_id');
    }

    public function denuncia(){
        return $this->belongsTo(Parametro::class, 'prm_denuncia_id');
    }

    public function terapia(){
        return $this->belongsTo(Parametro::class, 'prm_terapia_id');
    }

    public function estado(){
        return $this->belongsTo(Parametro::class, 'prm_estado_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}