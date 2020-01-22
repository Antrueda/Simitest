<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisMapaProc extends Model{
    protected $fillable = ['version','sis_entidad_id','vigencia','cierre', 'sis_esta_id' , 'user_crea_id', 'user_edita_id'];
    
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function sisEntidad(){
        return $this->belongsTo(SisEntidad::class);
    }
    
    public function sisProcesos(){
        return $this->hasMany(SisProceso::class, 'sis_mapa_proc_id');
    }
    
    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}