<?php

namespace App\Traits\Acciones\Grupales\Sena\Administracion;

use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\fichaobservacion\FosTse;
use App\Models\Temacombo;
use App\Models\Usuario\Estusuario;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
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

    /**
     * encontrar listar paises
     */

    public function listaFosts(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Temacombo::select(
                [
                    'motivo_egresos.id',
                    'motivo_egresos.nombre',
                    'motivo_egresos.created_at',
                    'motivo_egresos.sis_esta_id',
                    'sis_estas.s_estado'
                ]
            )
                ->join('sis_estas', 'motivo_egresos.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function ListaGrado(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = EdaGrado::select([
                'id',
                's_grado',
                'sis_esta_id',
                ])

            ->where('sis_esta_id',1);
            

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function ListaGrupo(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = GrupoMatricula::select([
                'grupo_matriculas.id',
                'grupo_matriculas.s_grupo',
                'grupo_matriculas.sis_esta_id',
                ])
            ->join('sis_estas', 'grupo_matriculas.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    /*
    Temacombo::select(['parametros.id', 'parametros.nombre'])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where('temacombos.id', $temaxxxx)
            ->where('parametros.sis_esta_id', 1)
            ->orderBy('parametros.nombre', 'desc')
            ->get();
    */

    public function listaFossts(Request $request, FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = MotivoEgresoSecu::select(
                [
                    'motivo_egreso_secus.id',
                    'motivo_egreso_secus.nombre',
                    'motivo_egreso_secus.created_at',
                    'motivo_egreso_secus.sis_esta_id',
                    'sis_estas.s_estado'
                ]
            )
                ->join('sis_estas', 'motivo_egreso_secus.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    //     public static function getServiciosDependencia(Request $request)
    //     {
    //        if ($request->ajax()) {
    //             $request->routexxx = [$this->opciones['routxxxx']];
    //             $request->botonesx = $this->opciones['rutacarp'] .
    //                 $this->opciones['carpetax'] . '.Botones.botonesapi';
    //             $request->estadoxx = 'layouts.components.botones.estadosx';
    //         $dataxxxx = SisServicio::select([
    //             'sis_depeservs.id',
    //             'sis_servicios.s_servicio',
    //             'sis_depeservs.sis_esta_id',
    //             'sis_estas.s_estado'
    //         ])
    //             ->join('sis_depeservs', 'sis_servicios.id', '=', 'sis_depeservs.sis_servicio_id')
    //             ->join('sis_estas', 'sis_depeservs.sis_esta_id', '=', 'sis_estas.id')
    //             ->where('sis_depeservs.sis_depen_id', $request->padrexxx);
    //         return $this->getDt($dataxxxx, $request);
    //     }
    // }


    public function getServiciosDependenciaGru(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'grupoasig'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = GrupoAsignar::select([
                'grupo_asignars.id',
                'sis_servicios.s_servicio',
                'sis_depens.nombre',
                'grupo_matriculas.s_grupo',
                'grupo_asignars.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_servicios', 'grupo_asignars.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_depens', 'grupo_asignars.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_estas', 'grupo_asignars.sis_esta_id', '=', 'sis_estas.id')
                ->join('grupo_matriculas', 'grupo_asignars.grupo_matricula_id', '=', 'grupo_matriculas.id');


            return $this->getDt($dataxxxx, $request);
        }
    }



    public function getServiciosDependenciaGrado(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'grupoasig'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = GradoAsignar::select([
                'grado_asignars.id',
                'sis_servicios.s_servicio',
                'sis_depens.nombre',
                'grado.s_grado as grado',
                'grado_asignars.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_servicios', 'grado_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->join('sis_depens', 'grado_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_estas', 'grado_asignars.sis_esta_id', '=', 'sis_estas.id')
            ->join('eda_grados as grado', 'grado_asignars.grado_matricula', '=', 'grado.id');


            return $this->getDt($dataxxxx, $request);
        }
    }




    public function getMotivosts(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2338
                ])
            );
        }
    }
    public function getMotivos(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2338
                ])
            );
        }
    }
}

