<?php

namespace App\Models\fichaobservacion;

use Illuminate\Database\Eloquent\Model;

class FosStsesTest extends Model
{
    protected $fillable = [
        'estusuario_id', 'nombre', 'descripcion', 'user_crea_id', 'user_edita_id','sis_esta_id',
   ];


   public function subtipo(){
    return $this->belongsToMany(FosSeguimientos::class,'fos_seguimientos', 'fos_stses_id', 'id');
}


   protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];
   /**
    * Store a newly created resource in storage.
    *
    * @param  $temaxxxx tema que padre de los parámetros
    * @param  $cabecera indica si el combo se debe devolver con el seleccione
    * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
    * @return $comboxxx
    */
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
       $parametr = FosStsesTest::select(['id as valuexxx', 'nombre as optionxx'])

           ->where('fos_tse_id', $dataxxxx['seguimie'])
           ->where('sis_esta_id', 1)
           ->orderBy('id', 'asc')
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

   public static function comboasignar($dataxxxx){
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
    $parametr = FosStsesTest::select(['id as valuexxx', 'nombre as optionxx'])
        ->where('sis_esta_id', 1)
        ->orderBy('id', 'asc')
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
