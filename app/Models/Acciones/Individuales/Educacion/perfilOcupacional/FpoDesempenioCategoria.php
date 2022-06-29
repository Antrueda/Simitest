<?php

namespace App\Models\Acciones\Individuales\Educacion\perfilOcupacional;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class FpoDesempenioCategoria extends Model
{
    protected $fillable = [
        'id', 'nombre','user_crea_id', 'user_edita_id','sis_esta_id',
   ];

   public function creador()
   {
     return $this->belongsTo(User::class, 'user_crea_id');
   }
 
   public function editor()
   {
     return $this->belongsTo(User::class, 'user_edita_id');
   }

    public static function combo($dataxxxx){
      $comboxxx = [];
      if($dataxxxx['cabecera']) {
          if ($dataxxxx['ajaxxxxx']) {
              $comboxxx[] = [
                  'valuexxx' => '',
                  'optionxx' => 'Seleccione'];
          } else {
              $comboxxx = ['' => 'Seleccione'];
          }
      }
      $parametr = FpoDesempenioCategoria::select(['id as valuexxx', 'nombre as optionxx'])
          ->where('sis_esta_id', 1)
          ->orderBy('nombre', 'asc')
          ->get();
      foreach($parametr as $registro) {
          if($dataxxxx['ajaxxxxx']) {
              $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
          }else {
              $comboxxx[$registro->valuexxx] = $registro->optionxx;
          }
      }
      return $comboxxx;
  }
}
