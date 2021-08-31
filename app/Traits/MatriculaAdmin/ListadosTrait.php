<?php

namespace App\Traits\MatriculaAdmin;

use App\Helpers\DatatableHelper;
use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosStsesTest;
use App\Models\fichaobservacion\FosTse;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeUpiNnaj;
use app\Models\sistema\SisServicio;
use App\Models\Temacombo;
use App\Models\Usuario\Estusuario;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

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
            $dataxxxx = Temacombo::select([
                'parametros.id', 
                'parametros.nombre',
                'parametros.sis_esta_id',
                ])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where('temacombos.id',406)
            ->join('sis_estas', 'motivo_egresos.sis_esta_id', '=', 'sis_estas.id');

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
            $dataxxxx = Temacombo::select([
                'parametros.id', 
                'parametros.nombre',
                'parametros.sis_esta_id',
                ])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where('temacombos.id',407)
            ->join('sis_estas', 'motivo_egresos.sis_esta_id', '=', 'sis_estas.id');

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
                'grupo.nombre as grupo',
                'grupo_asignars.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_servicios', 'grupo_asignars.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_depens', 'grupo_asignars.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_estas', 'grupo_asignars.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as grupo', 'grupo_asignars.grupo_matricula_id', '=', 'grupo.id');


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
                'grado.nombre as grado',
                'grado_asignars.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_servicios', 'grado_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->join('sis_depens', 'grado_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_estas', 'grado_asignars.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros as grado', 'grado_asignars.grupo_matricula_id', '=', 'grado.id');


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
                    'formular' => 2482
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
                    'formular' => 2483
                ])
            );
        }
    }
}
