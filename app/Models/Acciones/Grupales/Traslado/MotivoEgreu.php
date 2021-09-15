<?php

namespace App\Models\Acciones\Grupales\Traslado;

use Illuminate\Database\Eloquent\Model;

class MotivoEgreu extends Model
{
    protected $table = 'motivo_egreus';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         'motivoe_id','motivoese_id'
    ];

    public function motivoe(){
        return $this->belongsTo(MotivoEgreso::class);
    }
    
    public function motivoese(){
        return $this->belongsTo(MotivoEgresoSecu::class);
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
        $parametr = MotivoEgreu::select(['motivo_egreso_secus.id as valuexxx', 'motivo_egreso_secus.nombre as optionxx'])
            ->join('motivo_egresos', 'motivo_egreus.motivoe_id', '=', 'motivo_egresos.id')
            ->join('motivo_egreso_secus', 'motivo_egreus.motivoese_id', '=', 'motivo_egreso_secus.id')
            ->where('motivo_egreus.motivoe_id', $dataxxxx['seguimie'])
            ->where('motivo_egreus.sis_esta_id', 1)
            ->orderBy('motivo_egreus.id', 'asc')
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
