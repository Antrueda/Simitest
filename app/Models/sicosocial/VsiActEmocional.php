<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiActEmocional extends Model{
	protected $fillable = ['vsi_id', 'prm_activa_id', 'descripcion', 'conductual', 'cognitiva', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function activa(){
        return $this->belongsTo(Parametro::class, 'prm_activa_id');
    }

    public function fisiologicas(){
        return $this->belongsToMany(Parametro::class,'vsi_actemo_fisiologica', 'vsi_actemocional_id', 'parametro_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}