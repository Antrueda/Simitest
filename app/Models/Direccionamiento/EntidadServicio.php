<?php

namespace App\Models\Direccionamiento;

use App\Models\sistema\SisEntidad;
use App\Models\Sistema\SisServicio;
use Illuminate\Database\Eloquent\Model;

class EntidadServicio extends Model
{
    protected $table = 'sis_entidad_sis_servicio'; 

    protected $fillable = [
        'sis_entidad_id', 'sis_servicio_id','user_crea_id', 'user_edita_id','sis_esta_id',
   ];

   public function entidad(){
    return $this->belongsTo(SisEntidad::class);
}

public function serivcio(){
    return $this->belongsTo(SisServicio::class);
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
    $parametr = EntidadServicio::select(['sis_servicios.id as valuexxx', 'sis_servicios.s_servicio as optionxx'])
        ->join('sis_entidads', 'sis_entidad_sis_servicio.sis_entidad_id', '=', 'sis_entidads.id')
        ->join('sis_servicios', 'sis_entidad_sis_servicio.sis_servicio_id', '=', 'sis_servicios.id')
        ->where('sis_entidad_sis_servicio.sis_servicio_id', $dataxxxx['seguimie'])
        ->where('sis_entidad_sis_servicio.sis_esta_id', 1)
        ->orderBy('sis_entidad_sis_servicio.id', 'asc')
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
