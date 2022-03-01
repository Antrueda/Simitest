<?php

namespace App\Models\Acciones\Individuales\Educacion\AdministracionCursos;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','estusuario_id', 
         's_cursos','descripcion','grado_reque_id','tipo_curso_id'
    ];

    public function Modulo(){
        return $this->hasMany(CursoModulo::class,'cursos_id');
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
        $parametr = Curso::select(['id as valuexxx', 's_cursos as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('s_cursos', 'desc')
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

    


    public static function comboasignar($cabecera, $ajaxxxxx)
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
        $parametr = Curso::select(['id as valuexxx', 's_cursos as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('id', 'asc')
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
