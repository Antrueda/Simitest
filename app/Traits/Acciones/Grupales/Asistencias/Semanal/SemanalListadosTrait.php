<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Semanal;

use Illuminate\Http\Request;
use App\Models\AsisSema\Asissema;
use App\Models\AdmiActi\Actividade;
use App\Models\AsisSema\AsissemaMatricula;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait SemanalListadosTrait
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
            ->rawColumns(['botonexx', 's_estado','detalle'])
            ->toJson();
    }

    public  function getDtSemana($queryxxx, $requestx)
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

    public  function getAsistenciaNnajDt($queryxxx, $requestx)
    {

        return datatables()->of($queryxxx)
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
        )->addColumn(
            'edadxxxx',
            function ($queryxxx) use ($requestx) {
                return $queryxxx->calcularEdad($queryxxx->d_nacimiento);
            }
        )
            ->rawColumns(['botonexx'])
            ->toJson();
    }

    public function getListaxxx(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Asissema::select([
                'asissemas.id',
                'asissemas.prm_fecha_inicio',
                'asissemas.prm_fecha_final',
                'sis_depens.nombre as dependencia',
                'sis_servicios.s_servicio',
                'actividad.nombre as actividad',
                'eda_grados.s_grado',
                'cursos.s_cursos',
                'actividades.nombre as actividade',
                'convenio_progs.nombre as convenio',
                'grupo.nombre as grupo',
                'asissemas.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->leftJoin('cursos', 'asissemas.curso_id', '=', 'cursos.id')
                ->leftJoin('eda_grados', 'asissemas.eda_grados_id', '=', 'eda_grados.id')
                ->leftJoin('actividades', 'asissemas.actividade_id', '=', 'actividades.id')
                ->leftJoin('convenio_progs', 'asissemas.convenio_prog_id', '=', 'convenio_progs.id')
                ->join('sis_depens', 'asissemas.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'asissemas.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('parametros as actividad', 'asissemas.prm_actividad_id', '=', 'actividad.id')
                ->join('parametros as grupo', 'asissemas.prm_grupo_id', '=', 'grupo.id')
                ->join('sis_estas', 'asissemas.sis_esta_id', '=', 'sis_estas.id')
                ->orderBy('asissemas.prm_fecha_inicio','desc');
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaNnajsAsignados(Asissema $padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesnnajelimapi';

            //asistencia academica
            if ($padrexxx->prm_actividad_id == 2721) {
                $dataxxxx =  AsissemaMatricula::select([
                    'asisema_matriculas.id as asistenciamatricula',
                    // 'fi_datos_basicos.sis_nnaj_id as id',
                    'fi_datos_basicos.s_primer_nombre',
                    'fi_datos_basicos.s_segundo_nombre',
                    'fi_datos_basicos.s_primer_apellido',
                    'fi_datos_basicos.s_segundo_apellido',
                    'nnaj_sexos.s_nombre_identitario',
                    'tipo_docu.nombre as tipo_docu',
                    'nnaj_docus.s_documento',
                    'nnaj_nacimis.d_nacimiento',
                    // 'sis_estas.s_estado'
                ])
                    ->join('i_matricula_nnajs', 'asisema_matriculas.matric_acade_id', '=', 'i_matricula_nnajs.id')
                    ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                    ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                    ->leftJoin('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                    ->leftJoin('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                    ->leftJoin('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                    ->leftJoin('parametros as tipo_docu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipo_docu.id')
                    ->where('i_matricula_nnajs.sis_esta_id', 1)
                    ->where('sis_nnajs.prm_escomfam_id', 227)
                    ->where('asisema_matriculas.asissema_id', $padrexxx->id);
            }
            //asistencia convenio 
            if ($padrexxx->prm_actividad_id == 2724) {
                $dataxxxx = [];
            }
            //formacion tecnica-convenios
            if ($padrexxx->prm_actividad_id == 2723) {
                $dataxxxx = [];
            }
            //formscion tecnica talleres
            if ($padrexxx->prm_actividad_id == 2722) {
                $dataxxxx =  AsissemaMatricula::select([
                    'asisema_matriculas.id as asistenciamatricula',
                    // 'fi_datos_basicos.sis_nnaj_id as id',
                    'fi_datos_basicos.s_primer_nombre',
                    'fi_datos_basicos.s_segundo_nombre',
                    'fi_datos_basicos.s_primer_apellido',
                    'fi_datos_basicos.s_segundo_apellido',
                    'nnaj_sexos.s_nombre_identitario',
                    'tipo_docu.nombre as tipo_docu',
                    'nnaj_docus.s_documento',
                    'nnaj_nacimis.d_nacimiento',
                    // 'sis_estas.s_estado'
                ])
                    ->join('matricula_cursos', 'asisema_matriculas.matricula_curso_id', '=', 'matricula_cursos.id')
                    ->join('sis_nnajs', 'matricula_cursos.sis_nnaj_id', '=', 'sis_nnajs.id')
                    ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                    ->leftJoin('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                    ->leftJoin('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                    ->leftJoin('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                    ->leftJoin('parametros as tipo_docu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipo_docu.id')
                    ->where('matricula_cursos.sis_esta_id', 1)
                    ->where('sis_nnajs.prm_escomfam_id', 227)
                    ->where('asisema_matriculas.asissema_id', $padrexxx->id);
            }


            return $this->getAsistenciaNnajDt($dataxxxx, $request);
        }
    }

    public function getListaNnajsSelected(Asissema $padrexxx, Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesnnajasigapi';
            //asistencia academica
            if ($padrexxx->prm_actividad_id == 2721) {
                $dataxxxx =  IMatriculaNnaj::select([
                    'i_matricula_nnajs.id as matricula',
                    'fi_datos_basicos.s_primer_nombre',
                    'fi_datos_basicos.s_segundo_nombre',
                    'fi_datos_basicos.s_primer_apellido',
                    'fi_datos_basicos.s_segundo_apellido',
                    'nnaj_sexos.s_nombre_identitario',
                    'tipo_docu.nombre as tipo_docu',
                    'nnaj_docus.s_documento',
                    'nnaj_nacimis.d_nacimiento',
                    'asisema_matriculas.id as id2',
                    'asisema_matriculas.asissema_id',
                ])
                    ->leftJoin('asisema_matriculas', function($join) use ($padrexxx)
                    {
                        $join->on('i_matricula_nnajs.id', '=', 'asisema_matriculas.matric_acade_id')
                            ->where('asisema_matriculas.asissema_id', '=', $padrexxx->id);
                    })
                    ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                    ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                    ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                    ->leftJoin('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                    ->leftJoin('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                    ->leftJoin('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                    ->leftJoin('parametros as tipo_docu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipo_docu.id')
                    ->where(function ($query) use ($padrexxx) {
                        $query->where('asisema_matriculas.asissema_id', '<>', $padrexxx->id)
                            ->orWhere('asisema_matriculas.id', null);
                    })
                    ->where('i_matriculas.prm_upi_id', $padrexxx->sis_depen_id)
                    ->where('i_matriculas.prm_serv_id', $padrexxx->sis_servicio_id)
                    ->where('i_matriculas.prm_grado', $padrexxx->eda_grados_id)
                    ->where('i_matriculas.prm_grupo', $padrexxx->prm_grupo_id)
                    ->where('i_matricula_nnajs.sis_esta_id', 1)
                    ->where('sis_nnajs.prm_escomfam_id', 227);
            }
            //asistencia convenio 
            if ($padrexxx->prm_actividad_id == 2724) {
                $dataxxxx = [];
            }
            //formacion tecnica-convenios
            if ($padrexxx->prm_actividad_id == 2723) {
                $dataxxxx = [];
            }
            //formscion tecnica talleres
            if ($padrexxx->prm_actividad_id == 2722) {
                $dataxxxx =  MatriculaCurso::distinct('matricula_cursos.id')->select([
                    'matricula_cursos.id as matricula',
                    'fi_datos_basicos.s_primer_nombre',
                    'fi_datos_basicos.s_segundo_nombre',
                    'fi_datos_basicos.s_primer_apellido',
                    'fi_datos_basicos.s_segundo_apellido',
                    'nnaj_sexos.s_nombre_identitario',
                    'tipo_docu.nombre as tipo_docu',
                    'nnaj_docus.s_documento',
                    'nnaj_nacimis.d_nacimiento',
                    'asisema_matriculas.id as id2',
                    'asisema_matriculas.asissema_id',
                ])
                    ->leftJoin('asisema_matriculas', function($join) use ($padrexxx)
                    {
                        $join->on('matricula_cursos.id', '=', 'asisema_matriculas.matricula_curso_id')
                            ->where('asisema_matriculas.asissema_id', '=', $padrexxx->id);
                    })
                    ->join('sis_nnajs', 'matricula_cursos.sis_nnaj_id', '=', 'sis_nnajs.id')
                    ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                    ->leftJoin('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                    ->leftJoin('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                    ->leftJoin('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                    ->leftJoin('parametros as tipo_docu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipo_docu.id')
                    ->where(function ($query) use ($padrexxx) {
                        $query->where('asisema_matriculas.asissema_id', '<>', $padrexxx->id)
                            ->orWhere('asisema_matriculas.id', null);
                    })
                    ->where('matricula_cursos.prm_grupo', $padrexxx->prm_grupo_id)
                    ->where('matricula_cursos.curso_id', $padrexxx->curso_id)
                    ->where('matricula_cursos.sis_esta_id', 1)
                    ->where('sis_nnajs.prm_escomfam_id', 227);

            }


            return $this->getAsistenciaNnajDt($dataxxxx, $request);
        }
    }

    public function listadoAsistencia($padrexxx)
    {

        $dataxxxx = [];
        //asistencia academica
        if ($padrexxx->prm_actividad_id == 2721) {
            $dataxxxx =  AsissemaMatricula::select([
                'asisema_matriculas.id',
                'asisema_matriculas.id as asistenciamatricula',
                // 'fi_datos_basicos.sis_nnaj_id as id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_sexos.s_nombre_identitario',
                'tipo_docu.nombre as tipo_docu',
                'nnaj_docus.s_documento',
                'nnaj_nacimis.d_nacimiento',
                // 'sis_estas.s_estado'
            ])
                ->with('asistencias:asissema_matri_id,fecha,valor_asis')
                ->join('i_matricula_nnajs', 'asisema_matriculas.matric_acade_id', '=', 'i_matricula_nnajs.id')
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->leftJoin('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->leftJoin('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->leftJoin('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->leftJoin('parametros as tipo_docu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipo_docu.id')
                ->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('sis_nnajs.prm_escomfam_id', 227)
                ->where('asisema_matriculas.asissema_id', $padrexxx->id)->paginate(15);
        }
        //asistencia convenio 
        if ($padrexxx->prm_actividad_id == 2724) {
            $dataxxxx = [];
        }
        //formacion tecnica-convenios
        if ($padrexxx->prm_actividad_id == 2723) {
            $dataxxxx = [];
        }
        //formscion tecnica talleres
        if ($padrexxx->prm_actividad_id == 2722) {
            $dataxxxx =  AsissemaMatricula::select([
                'asisema_matriculas.id',
                'asisema_matriculas.id as asistenciamatricula',
                // 'fi_datos_basicos.sis_nnaj_id as id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_sexos.s_nombre_identitario',
                'nnaj_docus.s_documento',

            ])
                ->with('asistencias:asissema_matri_id,fecha,valor_asis')
                ->join('matricula_cursos', 'asisema_matriculas.matricula_curso_id', '=', 'matricula_cursos.id')
                ->join('sis_nnajs', 'matricula_cursos.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->leftJoin('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->leftJoin('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->where('matricula_cursos.sis_esta_id', 1)
                ->where('sis_nnajs.prm_escomfam_id', 227)
                ->where('asisema_matriculas.asissema_id', $padrexxx->id)->paginate(15);
        }
        return $dataxxxx;
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

    public function getGrupoAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = GrupoAsignar::select(['parametros.id as valuexxx', 'parametros.nombre as optionxx'])
            ->join('parametros', 'grupo_asignars.grupo_matricula_id', '=', 'parametros.id')
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

    public function getActividadAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = Actividade::select('actividades.id AS valuexxx', 'actividades.nombre AS optionxx')
            ->join('actividade_sis_depen', 'actividades.id', 'actividade_sis_depen.actividade_id')
            ->where('actividade_sis_depen.sis_depen_id', $dataxxxx['dependen'])
            ->where('actividades.tipos_actividad_id', $dataxxxx['tipoacti'])
            ->where('actividades.sis_esta_id', 1)
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
}
