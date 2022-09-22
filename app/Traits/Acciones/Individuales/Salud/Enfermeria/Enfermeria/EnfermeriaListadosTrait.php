<?php

namespace App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria;

use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use App\Models\Ejemplo\AeEncuentro;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihLimite;
use App\Models\Acciones\Individuales\Salud\Enfermeria\Enfermeria;
use App\Models\Acciones\Individuales\Salud\Vacunas\Vacuna;
use App\Models\AdmiActi\Actividade;
use App\Models\AdmiActiAsd\AsdActividad;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait EnfermeriaListadosTrait
{
    public  function getDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */

                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    public function getListaxxx(Request $request,SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Enfermeria::select([
                'enfermerias.id',
                'sis_depens.nombre as dependencia',
                'enfermerias.fecha',
                'enfermerias.sis_esta_id',
                'users.name',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'enfermerias.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'enfermerias.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'enfermerias.sis_esta_id', '=', 'sis_estas.id')
                ->where('enfermerias.sis_nnaj_id',$padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }

   


    public function getListaLimites()
    {
        $dataxxxx = CgihLimite::select([
            'cgih_limites.id',
            'cgih_limites.limite',
        ])->where('cgih_limites.sis_esta_id', 1)->first();
        return $dataxxxx;





}

    

    public function getGrupoAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = GrupoAsignar::select(['grupo_matriculas.id as valuexxx', 'grupo_matriculas.s_grupo as optionxx'])
            ->join('grupo_matriculas', 'grupo_asignars.grupo_matricula_id', '=', 'grupo_matriculas.id')
            ->join('sis_depens', 'grupo_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_servicios', 'grupo_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->where('grupo_asignars.sis_depen_id', $dataxxxx['dependen'])
            ->where('grupo_asignars.sis_servicio_id', $dataxxxx['servicio'])
            ->where('grupo_asignars.sis_esta_id', 1)
            ->orderBy('grupo_asignars.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }



    
    public function getGradoAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = GradoAsignar::select(['eda_grados.id as valuexxx', 'eda_grados.s_grado as optionxx'])
            ->join('eda_grados', 'grado_asignars.grado_matricula', '=', 'eda_grados.id')
            ->join('sis_depens', 'grado_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_servicios', 'grado_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->where('grado_asignars.sis_depen_id', $dataxxxx['dependen'])
            ->where('grado_asignars.sis_servicio_id', $dataxxxx['servicio'])
            ->where('grado_asignars.sis_esta_id', 1)
            ->orderBy('grado_asignars.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }

    // public function getActividadAsignar($dataxxxx)
    // {
    //     $dataxxxx['dataxxxx'] = AsdActividad::select('asd_actividads.id AS valuexxx', 'asd_actividads.nombre AS optionxx')
    //         ->where('asd_actividads.tipos_actividad_id', $dataxxxx['tipoacti'])
    //         ->where('asd_actividads.sis_esta_id', 1)
    //         ->get();
    //     $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
    //     return $respuest;
    // }


    public function getActividadAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = Vacuna::select('vacunas.id AS valuexxx', 'vacunas.nombre AS optionxx')
            ->where('vacunas.tipo_vacunas_id', $dataxxxx['tipoacti'])
            ->where('vacunas.sis_esta_id', 1)
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }

    public function getCursoWithTipo($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = Curso::select('cursos.id AS valuexxx', 'cursos.s_cursos AS optionxx')
            ->where('cursos.tipo_curso_id', $dataxxxx['tipoCurs'])
            ->where('cursos.sis_esta_id', 1)
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }

    public function getResponsableUpiMatricula(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'comboxxx' => SisDepen::find($request->padrexxx)->ResponsableAjax,
                'campoxxx' => '#responsable',
                'selected' => 'selected'
            ];
            return response()->json($respuest);
        }
    }

    




    public function getMatriculaAcademicaNnaj($sis_nnaj)
    {
            $dataxxxx = IMatriculaNnaj::select([
                'i_matricula_nnajs.id',
                'i_matricula_nnajs.numeromatricula',
                'i_matriculas.fecha',
                'grupo_matriculas.s_grupo', 
                'eda_grados.s_grado',
                'periodo.nombre as periodo',       
                'estrategia.nombre as estrategia', 
                'i_estado_ms.id as idesta'
            ])
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.imatrinnaj_id')
                ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                ->join('grupo_matriculas', 'i_matriculas.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('eda_grados', 'i_matriculas.prm_grado', '=', 'eda_grados.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as periodo', 'i_matriculas.prm_periodo', '=', 'periodo.id')
                ->join('parametros as estrategia', 'i_matriculas.prm_estra', '=', 'estrategia.id')
                ->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('i_matricula_nnajs.sis_nnaj_id',$sis_nnaj)->first();
            return $dataxxxx;
    }

    public function getMatriculaTalleresNnaj($sis_nnaj)
    {
            $dataxxxx = MatriculaCurso::select([
                'matricula_cursos.id',
                'grupo_matriculas.s_grupo', 
                'cursos.s_cursos',
                'tipocurso.nombre as tipocurso',       
            ])
                ->join('grupo_matriculas', 'matricula_cursos.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('cursos', 'matricula_cursos.curso_id', '=', 'cursos.id')
                ->join('parametros as tipocurso', 'matricula_cursos.prm_curso', '=', 'tipocurso.id')
                ->where('matricula_cursos.sis_esta_id', 1)
                ->where('matricula_cursos.sis_nnaj_id', $sis_nnaj)->first();

            return $dataxxxx;
    }

   


}
