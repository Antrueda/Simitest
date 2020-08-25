<?php

namespace app\Models\fichaIngreso;

use app\Models\User;
use Illuminate\Database\Eloquent\Model;

class FiDiasGeneraIngreso extends Model
{
    protected $fillable = [
        'i_prm_dia_genera_id',
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
}
