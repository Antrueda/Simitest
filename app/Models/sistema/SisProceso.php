<?php

namespace App\Models\Sistema;

use App\Models\User;
use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;

class SisProceso extends Model{
     protected $fillable = ['sis_proceso_id','sis_mapa_proc_id','prm_proceso_id','nombre', 'sis_esta_id' , 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
    
    public function sisProcesos(){
        return $this->hasMany(SisProceso::class, 'sis_proceso_id', 'id');
    }

    public function sisProceso(){
        return $this->belongsTo(SisProceso::class, 'sis_proceso_id', 'id');
    }

    public function sisMapaProc(){
        return $this->belongsTo(SisMapaProc::class, 'sis_mapa_proc_id');
    }

    public function tipoProceso(){
        return $this->belongsTo(Parametro::class, 'prm_proceso_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}