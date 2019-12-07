<?php

namespace App\Models\consulta;

use App\Models\Parametro;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class CsdRedsocActual extends Model{

    protected $fillable = [
        'csd_id', 'prm_tipo_id', 'nombre', 'servicios', 'telefono', 'direccion', 'user_crea_id', 'user_edita_id', 'activo'
    ];
    
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function tipo(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
