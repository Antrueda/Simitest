<?php

namespace App\Models\Acciones\Grupales\Educacion;

use Illuminate\Database\Eloquent\Model;

class GrupoDias extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'prm_dia_id', 'grupo_id',
    ];

   
    public function grupo_id(){
      return $this->belongsTo(GrupoMatricula::class,'grupo_id');
    }

}
