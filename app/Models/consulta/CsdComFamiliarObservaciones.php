<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class CsdComFamiliarObservaciones extends Model{
    protected $table = "csd_com_familiars_observacions";
    protected $fillable = [
        'csd_id', 'observaciones', 'user_crea_id', 'user_edita_id', 'sis_esta_id'
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
