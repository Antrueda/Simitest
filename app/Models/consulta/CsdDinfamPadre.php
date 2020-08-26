<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;

class CsdDinfamPadre extends Model{
    protected $fillable = ['csd_id', 'prm_convive_id', 'dia', 'mes', 'ano',
    'hijo', 'prm_separa_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
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
