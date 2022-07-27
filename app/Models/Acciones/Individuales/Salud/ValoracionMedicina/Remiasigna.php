<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionMedicina;

use Illuminate\Database\Eloquent\Model;

class Remiasigna extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'remi_id', 'reesp_id', 
    ];




    public static function combo($cabecera, $ajaxxxxx,$nnajxxxx){
        
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => '',
                    'optionxx' => 'Seleccione'
                ];
            } else {
                $comboxxx = [
                    '' => 'Seleccione'
                ];
            }
        }
        $parametr = Remiasigna::select(['modulos.id as valuexxx', 'modulos.s_modulo as optionxx'])
            ->join('cursos', 'curso_modulos.cursos_id', '=', 'cursos.id')
            ->join('modulos', 'curso_modulos.modulo_id', '=', 'modulos.id')
            ->where('curso_modulos.cursos_id', $nnajxxxx)
            ->where('curso_modulos.sis_esta_id', 1)
            ->orderBy('curso_modulos.id', 'asc')
            ->get();
            foreach ($parametr as $registro) {
                if ($ajaxxxxx) {
                    $comboxxx[] = [
                        'valuexxx' => $registro->valuexxx,
                        'optionxx' => $registro->optionxx
                    ];
                } else {
                    $comboxxx[$registro->valuexxx] = $registro->optionxx;
                }
            }
            return $comboxxx;
        }
}
