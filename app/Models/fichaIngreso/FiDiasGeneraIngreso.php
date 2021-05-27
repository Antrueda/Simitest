<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class FiDiasGeneraIngreso extends Model
{
    protected $fillable = [
        'prm_diagener_id',
        'fi_generacion_ingreso_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];
    public function fi_generacion_ingreso(){
      return $this->belongsTo(FiGeneracionIngreso::class);
    }
      protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
      public function creador()
      {
        return $this->belongsTo(User::class, 'user_crea_id');
      }

      public function editor()
      {
        return $this->belongsTo(User::class, 'user_edita_id');
      }

      public function prm_diagener()
      {
          return $this->belongsTo(Parametro::class, 'prm_diagener_id');
      }
}
