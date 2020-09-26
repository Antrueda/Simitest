<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class CsdResobsers extends Model{
    
    protected $fillable = [
        'csd_residencia_id', 'observaciones', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'
    ];

    public function csd(){
        return $this->belongsTo(CsdResidencia::class, 'csd_residencia_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
