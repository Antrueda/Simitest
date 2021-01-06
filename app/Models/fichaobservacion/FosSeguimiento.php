<?php

namespace App\Models\fichaobservacion;

use Illuminate\Database\Eloquent\Model;

class FosSeguimiento extends Model
{
    protected $fillable = [
        'fos_tse_id', 'fos_stses_id','user_crea_id', 'user_edita_id','sis_esta_id',
   ];

   public function fos_tse(){
    return $this->belongsTo(FosTse::class);
}

public function fos_stses(){
    return $this->belongsTo(FosStse::class);
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
    $parametr = FosSeguimiento::select(['fos_seguimientos.id as valuexxx', 'fos_stses.nombre as optionxx'])
        ->join('fos_tses', 'fos_seguimientos.fos_tse_id', '=', 'fos_tses.id')
        ->join('fos_stses', 'fos_seguimientos.fos_stses_id', '=', 'fos_stses.id')
        ->where('fos_seguimientos.fos_tse_id', $dataxxxx['seguimie'])
        ->where('fos_seguimientos.sis_esta_id', 1)
        ->orderBy('fos_seguimientos.id', 'asc')
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
