<?php

namespace App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VctListadosTrait
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
     * encontrar la lisa de actas de encuentro
     */


    public function getListaxxx(Request $request,SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Vcto::select([
                'vctos.id',
                'vctos.fecha',
                'vctos.concepto',
                'sis_depens.nombre',
                'alimentacion.nombre as alimentacion',
                'higienemayor.nombre as higienemayor',
                'higienemenor.nombre as higienemenor',
                'vcto_competens.obs_higiene',
                'vestido.nombre as vestido',
                'habitos.nombre as habitos',
                'actividades.nombre as actividades',
                'vctos.sis_esta_id',
                'users.name',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'vctos.sis_depen_id', '=', 'sis_depens.id')
                ->leftJoin('vcto_competens', 'vctos.id', '=', 'vcto_competens.vcto_id')
                ->leftJoin('parametros as alimentacion', 'vcto_competens.prm_alimentacion', '=', 'alimentacion.id')
                ->leftJoin('parametros as higienemayor', 'vcto_competens.prm_higienemayor', '=', 'higienemayor.id')
                ->leftJoin('parametros as higienemenor', 'vcto_competens.prm_higienemenor', '=', 'higienemenor.id')
                ->leftJoin('parametros as vestido', 'vcto_competens.prm_vestido', '=', 'vestido.id')
                ->leftJoin('parametros as habitos', 'vcto_competens.prm_habitos', '=', 'habitos.id')
                ->leftJoin('parametros as actividades', 'vcto_competens.prm_activis', '=', 'actividades.id')
                ->leftJoin('users', 'vctos.user_res_id', '=', 'users.id')
                ->join('sis_estas', 'vctos.sis_esta_id', '=', 'sis_estas.id')
                ->orderBy('vctos.fecha','desc')
                ->where('vctos.sis_nnaj_id',$padrexxx->id);
            return $this->getDt($dataxxxx, $request);
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
}
