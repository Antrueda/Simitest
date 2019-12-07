<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiDinfamMadre extends Model{
    protected $fillable = ['vsi_id', 'prm_convive_id', 'dia', 'mes', 'ano', 'hijo', 'prm_separa_id', 'user_crea_id', 'user_edita_id', 'activo'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function convive(){
        return $this->belongsTo(Parametro::class, 'prm_convive_id');
    }

    public function separa(){
        return $this->belongsTo(Parametro::class, 'prm_separa_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}