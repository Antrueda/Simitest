<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;

class FiContviol extends Model
{


    protected $fillable = [
        'fi_violencia_id',
        'prm_violenci_id',
        'prm_contexto_id',
        'prm_respuest_id',
        'tema_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];

      public function fi_violencia()
      {
          return $this->belongsTo(FiViolencia::class);
      }
      public function prm_violenci()
      {
          return $this->belongsTo(Parametro::class,'prm_violenci_id');
      }
      public function prm_contexto()
      {
          return $this->belongsTo(Parametro::class,'prm_contexto_id');
      }
      public function prm_respuest()
      {
          return $this->belongsTo(Parametro::class,'prm_respuest_id');
      }
      
}
