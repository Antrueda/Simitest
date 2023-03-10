<?php

namespace App\Models\Acciones\Individuales\Educacion\AdministracionCursos;

use Illuminate\Database\Eloquent\Model;

class Denomina extends Model
{
   
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         's_denominas'
    ];

    public function Unidad(){
        return $this->hasMany(Modulo::class);
    }


    public static function combo($cabecera, $ajaxxxxx,$padrexxx)
    {
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
        $parametr = ModuloUnidad::select(['denominas.id as valuexxx', 'denominas.s_denominas as optionxx'])
        ->join('modulos', 'modulo_unidads.modulo_id', '=', 'modulos.id')
        ->join('denominas', 'modulo_unidads.denomina_id', '=', 'denominas.id')
        ->where('modulo_unidads.modulo_id', $padrexxx)
        ->where('modulo_unidads.sis_esta_id', 1)
        ->orderBy('modulo_unidads.id', 'asc')
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


    public static function comboasignar($dataxxxx)
    {
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
        $parametr = Denomina::select(['id as valuexxx', 's_denominas as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('id', 'asc')
            ->get();
        foreach ($parametr as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
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
