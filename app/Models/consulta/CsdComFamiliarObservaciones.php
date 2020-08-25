<?php

namespace app\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use app\Models\User;

class CsdComFamiliarObservaciones extends Model{
    protected $fillable = [
        'csd_id', 'observaciones', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'
    ];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
