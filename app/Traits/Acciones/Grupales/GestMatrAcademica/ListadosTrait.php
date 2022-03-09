<?php

namespace App\Traits\Acciones\Grupales\GestMatrAcademica;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\Ejemplo\AeEncuentro;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;

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
            // ->addColumn(
            //     's_estado',
            //     function ($queryxxx) use ($requestx) {
            //         return  view($requestx->estadoxx, [
            //             'queryxxx' => $queryxxx,
            //             'requestx' => $requestx,
            //         ]);
            //     }

            // )
            ->rawColumns(['botonexx'])
            ->toJson();
    }

    /**
     * encontrar la lisa de actas de encuentro
     */


    // public function getListaxxx(Request $request)
    // {

    //     if ($request->ajax()) {
    //         $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
    //         $request->botonesx = $this->opciones['rutacarp'] .
    //             $this->opciones['carpetax'] . '.Botones.botonesapi';
    //         $request->estadoxx = 'layouts.components.botones.estadosx';
    //         $dataxxxx =  AeEncuentro::select([
    //             'ae_encuentros.id',
    //             'sis_depens.nombre as dependencia',
    //             'sis_servicios.s_servicio',
    //             'sis_localidads.s_localidad',
    //             'sis_upzs.s_upz',
    //             'sis_barrios.s_barrio',
    //             'accion.nombre as accion',
    //             'actividad.nombre as actividad', 'ae_encuentros.sis_esta_id', 'sis_estas.s_estado'
    //         ])
    //             ->join('sis_depens', 'ae_encuentros.sis_depen_id', '=', 'sis_depens.id')
    //             ->join('sis_servicios', 'ae_encuentros.sis_servicio_id', '=', 'sis_servicios.id')
    //             ->join('sis_localidads', 'ae_encuentros.sis_localidad_id', '=', 'sis_localidads.id')
    //             ->join('sis_upzs', 'ae_encuentros.sis_upz_id', '=', 'sis_upzs.id')
    //             ->join('sis_barrios', 'ae_encuentros.sis_barrio_id', '=', 'sis_barrios.id')
    //             ->join('parametros as accion', 'ae_encuentros.prm_accion_id', '=', 'accion.id')
    //             ->join('parametros as actividad', 'ae_encuentros.prm_actividad_id', '=', 'actividad.id')
    //             ->join('sis_estas', 'ae_encuentros.sis_esta_id', '=', 'sis_estas.id');
    //         return $this->getDt($dataxxxx, $request);
    //     }
    // }

    public function getListMatriculasNnaj(SisNnaj $modeloxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
    
            $dataxxxx = IMatriculaNnaj::select([
                'i_matricula_nnajs.id',
                'i_matricula_nnajs.numeromatricula',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'i_matriculas.fecha',
                'tipodocu.nombre as tipodocu',    
                'nnaj_docus.s_documento',      
                'grupo_matriculas.s_grupo', 
                'eda_grados.s_grado',
                'periodo.nombre as periodo',       
                'estrategia.nombre as estrategia', 
                'sis_depens.nombre as upi', 
                'sis_servicios.s_servicio',
                'i_estado_ms.id as idesta'
            ])
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                ->join('grupo_matriculas', 'i_matriculas.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('eda_grados', 'i_matriculas.prm_grado', '=', 'eda_grados.id')
                ->join('sis_depens', 'i_matriculas.prm_upi_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'i_matriculas.prm_serv_id', '=', 'sis_servicios.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as periodo', 'i_matriculas.prm_periodo', '=', 'periodo.id')
                ->join('parametros as estrategia', 'i_matriculas.prm_estra', '=', 'estrategia.id')
                ->join('nnaj_docus', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_nacimis', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_sexos', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('i_matricula_nnajs.sis_nnaj_id', $modeloxx->id);

            return $this->getDt($dataxxxx, $request);
        }


    }

    public function getNnajMatricula($modeloxx)
    {
            $dataxxxx = IMatriculaNnaj::select([
                'i_matricula_nnajs.id',
                'i_matricula_nnajs.numeromatricula',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'i_matriculas.fecha', 
                'nnaj_docus.s_documento',      
                'grupo_matriculas.s_grupo', 
                'eda_grados.s_grado',
                'periodo.nombre as periodo',       
                'estrategia.nombre as estrategia', 
                'sis_depens.nombre as upi', 
                'sis_servicios.s_servicio',
                'i_estado_ms.id as idesta'
            ])
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                ->join('grupo_matriculas', 'i_matriculas.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('eda_grados', 'i_matriculas.prm_grado', '=', 'eda_grados.id')
                ->join('sis_depens', 'i_matriculas.prm_upi_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'i_matriculas.prm_serv_id', '=', 'sis_servicios.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as periodo', 'i_matriculas.prm_periodo', '=', 'periodo.id')
                ->join('parametros as estrategia', 'i_matriculas.prm_estra', '=', 'estrategia.id')
                ->join('nnaj_docus', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('i_matricula_nnajs.id', $modeloxx)->firstOrFail();
                
            return $dataxxxx;
    }

}
