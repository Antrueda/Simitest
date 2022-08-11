<?php

namespace App\Models\Acciones\Individuales\Educacion\AdministracionCursos;

use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use Illuminate\Database\Eloquent\Model;

class ModuloUnidad extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','denomina_id', 
         'modulo_id'
    ];

    public function Modulo(){
        return $this->belongsTo(Modulo::class);
    }
    
    public function Unidad(){
        return $this->belongsTo(Denomina::class);
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
  
        $parametr = ModuloUnidad::select(['denominas.id as valuexxx', 'denominas.s_denominas as optionxx'])
            ->join('modulos', 'modulo_unidads.modulo_id', '=', 'modulos.id')
            ->join('denominas', 'modulo_unidads.denomina_id', '=', 'denominas.id')
            ->where('modulo_unidads.modulo_id', $dataxxxx['seguimie'])
            ->where('modulo_unidads.sis_esta_id', 1)
            ->orderBy('modulo_unidads.id', 'asc')
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
