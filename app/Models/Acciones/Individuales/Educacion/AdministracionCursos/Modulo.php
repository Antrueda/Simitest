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
        return $this->hasMany(ModuloUnidad::class,'modulo_id');
    }

    public function Curso(){
        return $this->hasMany(CursoModulo::class,'modulo_id');
    }
    public static function combo($dataxxxx)
    {
        $comboxxx = [];
        if($dataxxxx['cabecera']){
            if($dataxxxx['ajaxxxxx']){
                $comboxxx[] = ['valuexxx'=>'','optionxx'=>'Seleccione'];
            }else{
                $comboxxx = [''=>'Seleccione'];
            }

        }
        
        $entidadx=CursoModulo::select(['modulos.id as valuexxx', 'modulos.s_modulo as optionxx'])
        ->join('cursos', 'curso_modulos.cursos_id', '=', 'cursos.id')
        ->join('modulos', 'curso_modulos.modulo_id', '=', 'modulos.id')
        ->where('curso_modulos.cursos_id', $dataxxxx['cursoxxx'])
        ->where('curso_modulos.sis_esta_id', 1)
        ->orderBy('curso_modulos.id', 'asc')
        ->get();
     
        foreach ($entidadx as $entisalu) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = [
                    'valuexxx' => $entisalu->valuexxx,
                    'optionxx' => $entisalu->optionxx
                ];
            } else {
                $comboxxx[$entisalu->valuexxx] = $entisalu->optionxx;
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

