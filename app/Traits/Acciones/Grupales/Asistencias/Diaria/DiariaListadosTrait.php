<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\AdmiActiAsd\AsdActividad;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdSisNnaj;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdNnajActividades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DiariaListadosTrait
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

    /**
     * encontrar la lisa de actas de encuentro
     */


    public function getListaxxx(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = [];
            if ($request->my_extra_data['CargarData'] != "false") {
                $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesapi';
                $request->estadoxx = 'layouts.components.botones.estadosx';

                $dataxxxx =  AsdDiaria::select([
                    'asd_diarias.id',
                    'sis_depens.nombre as dependencia',
                    'sis_servicios.s_servicio',
                    'sis_localidads.s_localidad',
                    'sis_upzs.s_upz',
                    'sis_barrios.s_barrio',
                    'lugactiv.nombre as lugactiv',
                    'grupo.nombre as grupo',
                    'actividad.nombre as actividad',
                    'asd_diarias.sis_esta_id',
                    'asd_diarias.consecut',
                    'asd_diarias.numepagi',
                    'asd_actividads.nombre as activida',
                    'asd_tiactividads.nombre as tipo',
                    'asd_diarias.fechdili',
                    'sis_estas.s_estado',
                    DB::raw("(SELECT COUNT(*) FROM asd_sis_nnajs where asd_sis_nnajs.asd_diaria_id = asd_diarias.id ) AS contado"),
                ])
                    ->join('sis_depens', 'asd_diarias.sis_depen_id', '=', 'sis_depens.id')
                    ->join('sis_servicios', 'asd_diarias.sis_servicio_id', '=', 'sis_servicios.id')
                    ->join('sis_upzbarris', 'asd_diarias.sis_upzbarri_id', '=', 'sis_upzbarris.id')
                    ->join('sis_barrios', 'sis_upzbarris.sis_barrio_id', '=', 'sis_barrios.id')
                    ->join('sis_localupzs', 'sis_upzbarris.sis_localupz_id', '=', 'sis_localupzs.id')
                    ->join('sis_localidads', 'sis_localupzs.sis_localidad_id', '=', 'sis_localidads.id')
                    ->join('sis_upzs', 'sis_localupzs.sis_upz_id', '=', 'sis_upzs.id')
                    ->join('parametros as lugactiv', 'asd_diarias.prm_lugactiv_id', '=', 'lugactiv.id')
                    ->join('parametros as grupo', 'asd_diarias.prm_grupo_id', '=', 'grupo.id')
                    ->join('parametros as actividad', 'asd_diarias.prm_actividad_id', '=', 'actividad.id')
                    ->join('asd_actividads', 'asd_diarias.asd_actividad_id', '=', 'asd_actividads.id')
                    ->join('asd_tiactividads', 'asd_actividads.tipos_actividad_id', '=', 'asd_tiactividads.id')
                    ->join('sis_estas', 'asd_diarias.sis_esta_id', '=', 'sis_estas.id')
                    ->where('asd_diarias.sis_depen_id', $request->my_extra_data['sisdepen'])
                    ->orderBy('asd_diarias.id', 'asc')
                    ;
                
                if ($request->my_extra_data['fecha_desde'] != "") {
                    $from = date($request->my_extra_data['fecha_desde']);
                    $to = date($request->my_extra_data['fecha_hasta']);
                    $dataxxxx = $dataxxxx->whereBetween('fechdili', [$from, $to]);
                }
            }

            return $this->getDt($dataxxxx, $request);
        }
    }

    // los NNajs Que han sido agregados  a la planilla planilla de asistencia diaria 
    public function getNnajsAgregados(Request $request, $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            // $request->routexxx = ['nnajasdi', 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AsdSisNnaj::select([
                'asd_sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_nacimis.d_nacimiento',
                'asd_sis_nnajs.sis_esta_id',
                'nnaj_docus.s_documento',
                'asd_diarias.consecut',
                'sis_estas.s_estado'
            ])
                ->join('asd_diarias', 'asd_sis_nnajs.asd_diaria_id', '=', 'asd_diarias.id')
                ->join('sis_nnajs', 'asd_sis_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->leftJoin('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('sis_estas', 'asd_sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->where('asd_sis_nnajs.asd_diaria_id', $padrexxx);

            return $this->getAsistenciaNnajDt($dataxxxx, $request);
        }
    }

    /// para asignar las actividades 

    public function getActividadAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = AsdActividad::select('asd_actividads.id AS valuexxx', 'asd_actividads.nombre AS optionxx')
            ->where('asd_actividads.tipos_actividad_id', $dataxxxx['tipoacti'])
            ->where('asd_actividads.sis_esta_id', 1)
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }
    //agregar al nnajs
    public function getNnajsAgregar(Request $request, AsdDiaria $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->padrexxx = $padrexxx;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.agregarx';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  SisNnaj::select([
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_nacimis.d_nacimiento',
                'sis_nnajs.sis_esta_id',
                'nnaj_docus.s_documento',
                'sis_estas.s_estado',
            ])
                ->leftJoin('asd_sis_nnajs', function ($join) use ($padrexxx) {
                    $join->on('sis_nnajs.id', '=', 'asd_sis_nnajs.sis_nnaj_id')
                        ->where('asd_sis_nnajs.asd_diaria_id', '=', $padrexxx->id);
                })
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->leftJoin('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_upis', 'sis_nnajs.id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('nnaj_deses', 'nnaj_upis.id', '=', 'nnaj_deses.nnaj_upi_id') //servicios
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->distinct()
                ->where('sis_nnajs.sis_esta_id', 1) //activo
                ->where('nnaj_upis.sis_esta_id', 1)
                ->where('nnaj_deses.sis_servicio_id', '<>', 8)
                ->where('nnaj_deses.sis_servicio_id', '<>', 16)
                ->where(function ($query) use ($padrexxx) {
                    
                    // if(!Auth::user()->s_documento=='17496705'){
                        $query->where('asd_sis_nnajs.asd_diaria_id', '<>', $padrexxx->id);
                        $query ->orWhere('asd_sis_nnajs.id', null);
                    // }else {
                    //     // echo 777;
                    // }
                    
                    
                    //->where('asd_sis_nnajs.deleted_at','<>',$padrexxx->id);
                });

            if ($padrexxx->dependencia->prm_recreativa_id != 227 && $padrexxx->sis_servicio_id != 6) {
                $dataxxxx = $dataxxxx->where('nnaj_upis.sis_depen_id', $padrexxx->sis_depen_id)
                    ->where('nnaj_deses.sis_servicio_id', $padrexxx->sis_servicio_id);
            }
            return $this->getAsistenciaNnajDt($dataxxxx, $request);
        }
    }

    public function getNnajActividades(Request $request, $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = ['nnajacti', 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AsdNnajActividades::select([
                'asd_nnaj_actividades.id',
                'novedad.nombre as novedad',
                'asd_actividads.nombre as actividad',
                'asd_tiactividads.nombre as tipo',
                'asd_nnaj_actividades.sis_esta_id',
                'sis_estas.s_estado',

            ])
                ->join('asd_actividads', 'asd_nnaj_actividades.asd_actividads_id', '=', 'asd_actividads.id')
                ->join('asd_tiactividads', 'asd_actividads.tipos_actividad_id', '=', 'asd_tiactividads.id')
                ->join('parametros as novedad', 'asd_nnaj_actividades.prm_novedadx_id', '=', 'novedad.id')
                ->join('sis_estas', 'asd_nnaj_actividades.sis_esta_id', '=', 'sis_estas.id')
                ->where('asd_nnaj_actividades.asd_sis_nnajs_id', $padrexxx);

            return $this->getDt($dataxxxx, $request);
        }
    }
}
