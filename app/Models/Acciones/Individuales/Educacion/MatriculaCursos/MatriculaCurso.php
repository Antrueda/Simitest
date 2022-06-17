<?php

namespace App\Models\Acciones\Individuales\Educacion\MatriculaCursos;

use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisNnaj;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MatriculaCurso extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha',
        'doc_autorizado', 'telefono','ape1_autorizado','ape2_autorizado','celular','celular2',
        'nom1_autorizado', 'nom2_autorizado','prm_doc_id', 'prm_parentezco_id',
        'prm_ocupacion_id','prm_grupo','prm_curso', 'curso_id','user_id','upi_id','serv_id'
    ];


    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    public function upi(){
        return $this->belongsTo(SisDepen::class, 'upi_id');
    }

    public function grupo(){
        return $this->belongsTo(Parametro::class, 'prm_grupo');
    }

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    
    public static function combo($cabecera, $ajaxxxxx,$nnajxxxx)
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
        $parametr = MatriculaCurso::select(['matricula_cursos.id as valuexxx', 'cursos.s_cursos as optionxx'])
            ->join('cursos', 'matricula_cursos.curso_id', '=', 'cursos.id')
            ->where('matricula_cursos.sis_nnaj_id', $nnajxxxx)
            ->where('matricula_cursos.sis_esta_id', '1')
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
    
    public static function combonnaj($cabecera, $ajaxxxxx,$nnajxxxx)
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
        $parametr = MatriculaCurso::select(['cursos.id'])
            ->join('cursos', 'matricula_cursos.curso_id', '=', 'cursos.id')
            ->where('matricula_cursos.sis_nnaj_id', $nnajxxxx)
            ->where('matricula_cursos.sis_esta_id', '1')
            ->orderBy('s_cursos', 'desc')
            ->get();
      
        return $parametr;
    }
}
