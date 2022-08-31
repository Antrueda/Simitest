<?php

namespace App\Traits\Acciones\Individuales\Salud\Medicina\Administracion;

use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioItem;
use App\Models\Acciones\Individuales\salud\Medicina\AsignaMedicamentos;
use App\Models\Acciones\Individuales\salud\Medicina\Presentacion;
use App\Models\Acciones\Individuales\salud\Medicina\Medicamentos;
use App\Models\Acciones\Individuales\salud\Medicina\Compuesto;
use App\Models\Acciones\Individuales\salud\Medicina\Concentracion;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiListadosTrait
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


    public  function getDt2($queryxxx, $requestx)
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
          
              ->editColumn('compuesto', function ($request) {
                return strtoupper($request->compuesto); // human readable format
              })
            //   ->editColumn('presentacion', function ($request) {
            //     return strtoupper($request->compuesto); // human readable format
            //   })
            //   ->editColumn('concentracion', function ($request) {
            //     return strtoupper($request->compuesto); // human readable format
            //   })
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }





    /**
     * encontrar la lista de actividades Diarias
     */


    public function getListaMedicamentos(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  Medicamentos::select([
                'medicamentos.id',
                'medicamentos.nombre',
                'medicamentos.descripcion',
                'medicamentos.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_estas', 'medicamentos.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getListaConcentracion(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  Concentracion::select([
                'concentracions.id',
                'concentracions.nombre',
                'concentracions.descripcion',
                'concentracions.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_estas', 'concentracions.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }





    public function getListaCompuesto(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  Compuesto::select([
                'compuestos.id',
                'compuestos.nombre',
                'compuestos.descripcion',
                'compuestos.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_estas', 'compuestos.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getListaPresentacion(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  Presentacion::select([
                'presentacions.id',
                'presentacions.nombre',
                'presentacions.descripcion',
                'presentacions.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_estas', 'presentacions.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }



    public function getListaAsinarmedicamentossss(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';




            
            $dataxxxx =  Presentacion::select([
                'presentacions.id',
                'presentacions.nombre',
                'presentacions.descripcion',
                'presentacions.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_estas', 'presentacions.sis_esta_id', '=', 'sis_estas.id');
         

            // $dataxxxx =  Presentacion::select([
            //     'presentacions.id',
            //     'presentacions.nombre',
            //     'presentacions.descripcion',
            //     'presentacions.sis_esta_id',
            //     'sis_estas.s_estado'
            // ])
            // ->join('sis_estas', 'presentacions.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getListaAsinarmedicamentos( Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],''];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = AsignaMedicamentos::select(
				[
				
					'asigna_medicamentos.id',


                    'compuestos.id as idcompuesto',
                    'compuestos.nombre as compuesto',

                    'presentacions.id as idpresentacion',
                    'presentacions.nombre as presentacion',

                    'concentracions.id as idconcentracion',
                    'concentracions.nombre as concentracion',
                    

                    'asigna_medicamentos.sis_esta_id',
					'sis_estas.s_estado',
				]
			)
                ->join('compuestos', 'asigna_medicamentos.compuesto_id', '=', 'compuestos.id')
                ->join('presentacions', 'asigna_medicamentos.presentacion_id', '=', 'presentacions.id')
                ->join('concentracions', 'asigna_medicamentos.concentracion_id', '=', 'concentracions.id')
                ->join('sis_estas', 'asigna_medicamentos.sis_esta_id', '=', 'sis_estas.id');

                return $this->getDt2($dataxxxx, $request);


        }
    }












      
}
