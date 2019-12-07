<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\sistema\SisNnaj;
use App\Models\Parametro;
use App\Models\User;

class VsiBienvenida extends Model{
	protected $fillable = ['vsi_id', 'descripcion', 'activo', 'user_crea_id', 'user_edita_id'];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function motivos(){
        return $this->belongsToMany(Parametro::class,'vsi_bienvenida_motivo', 'vsi_bienvenida_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}