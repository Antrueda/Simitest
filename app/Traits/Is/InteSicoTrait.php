<?php

namespace App\Traits\Is;

use App\Models\intervencion\IsDatosBasico;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Http\Request;


trait InteSicoTrait
{

    public  function getDt($queryxxx, $requestx)
    {

        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
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


    public function intlista(Request $request, $nnajxxxx)
    {
        if ($request->ajax()) {
            $request->request->add([
                'botonesx' => 'intervencion/botones/botones',
                'estadoxx' => 'layouts.components.botones.estadosx',
                'routexxx' => ['isintervencion'],
            ]);
            $actualxx = IsDatosBasico::select([
                'is_datos_basicos.id', 'is_datos_basicos.sis_nnaj_id',  'tipoaten.nombre as tipoxxxx',
                'is_datos_basicos.d_fecha_diligencia', 'sis_depens.nombre', 'users.name', 'segundo.name as segundo',
                'is_datos_basicos.sis_esta_id','sis_estas.s_estado'
            ])
            ->join('sis_estas', 'is_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_depens', 'is_datos_basicos.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'is_datos_basicos.i_primer_responsable', '=', 'users.id')
                ->leftjoin('users as segundo', 'is_datos_basicos.i_segundo_responsable', '=', 'segundo.id')

                ->join('parametros as tipoaten', 'is_datos_basicos.i_prm_tipo_atencion_id', '=', 'tipoaten.id')
                ->where(function ($queryxxx) use ($nnajxxxx) {
                    $queryxxx->
                    // where('is_datos_basicos.sis_esta_id', 1)->
                    where('is_datos_basicos.sis_nnaj_id', $nnajxxxx);
                });

                return $this->getDt($actualxx,$request);

            // return datatables()
            //     ->eloquent($actualxx)
            //     ->addColumn('btns', 'intervencion/botones/botones')
            //     ->rawColumns(['btns'])
            //     ->toJson();
        }
    }
}
