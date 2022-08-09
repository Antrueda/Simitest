<?php

namespace App\Models\Acciones\Individuales\Educacion\perfilOcupacional;

use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoItemRespuesta;

class FpoComponenteRespuesta extends Model
{
    protected $fillable = [
        'id', 'observacion','fpo_componen_id','fpo_perfil_id',
   ];

   public function respuestaitems()
   {
     return $this->hasMany(FpoItemRespuesta::class, 'fpo_comp_respu_id');
   }

   public function componente()
   {
     return $this->belongsTo(FpoDesempenioComponente::class, 'fpo_componen_id');
   }
}
