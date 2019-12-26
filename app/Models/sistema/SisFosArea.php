<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class SisFosArea extends Model{
    protected $fillable = [
        'nombre', 'contexto', 'descripcion', 'user_crea_id', 'user_edita_id', 'activo',   
    ];
    
    protected $attributes = [ 'user_crea_id' => 1, 'user_edita_id'=> 1 ];

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_fos_tipo_seguimientos(){
        return $this->hasMany(SisFosTipoSeguimiento::class,'area_id');
    }
}
