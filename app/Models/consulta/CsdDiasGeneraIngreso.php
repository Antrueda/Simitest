<?php

namespace App\Models\consulta;

use App\Models\consulta\CsdGenIngreso;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CsdDiasGenIngreso extends Model
{
    protected $fillable = [
        'prm_dia_genera_id',
        'csd_gen_ingresos_id', 
        'user_crea_id', 
        'user_edita_id',
        'sis_esta_id'
      ];
    public function csd_gen_ingresos(){
      return $this->belongsTo(CsdGenIngreso::class);
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
