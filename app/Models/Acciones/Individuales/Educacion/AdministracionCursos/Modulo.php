<?php

namespace App\Models\Acciones\Individuales\Educacion\AdministracionCursos;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
   
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         's_modulo','descripcion','num_unidades'
    ];

    public function Unidad(){
        return $this->hasMany(Modulo::class);
    }

    public function Curso(){
        return $this->belongsTo(Curso::class);
    }
    public static function combo($cabecera, $ajaxxxxx)
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
        $parametr = Modulo::select(['id as valuexxx', 's_modulo as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('s_modulo', 'desc')
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
        $parametr = Modulo::select(['id as valuexxx', 's_modulo as optionxx'])
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

