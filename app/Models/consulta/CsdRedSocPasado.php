<?php

namespace App\Models\consulta;

use App\Models\Parametro;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class CsdRedsocPasado extends Model{

    protected $fillable = [
        'csd_id',  'user_crea_id', 'user_edita_id', 'activo',
        'nombre',   'servicios',    'cantidad',     'prm_unidad_id', 
        'ano', 'retiro'
    ];
  
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function unidad(){
        return $this->belongsTo(Parametro::class, 'prm_unidad_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }    
}
