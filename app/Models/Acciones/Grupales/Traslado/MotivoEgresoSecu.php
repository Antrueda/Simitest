<?php

namespace App\Models\Acciones\Grupales\Traslado;

use Illuminate\Database\Eloquent\Model;

class MotivoEgresoSecu extends Model
{
    protected $table = 'motivo_egreso_secus';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         'nombre','descripcion'
    ];

    public function subtipo(){
        return $this->belongsToMany(MotivoEgreu::class,'motivo_egreus', 'motivoese_id', 'id');
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
    $parametr = MotivoEgresoSecu::select(['id as valuexxx', 'nombre as optionxx'])
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
