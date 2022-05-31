<?php

namespace App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
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
                'vctos.sis_esta_id',
                'users.name',
                'sis_estas.s_estado'
            ])
                ->leftJoin('users', 'vctos.user_res_id', '=', 'users.id')
                ->join('sis_estas', 'vctos.sis_esta_id', '=', 'sis_estas.id')
                ->orderBy('vctos.fecha','desc')
                ->where('vctos.sis_nnaj_id',$padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }

   
}
