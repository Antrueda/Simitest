<?php

namespace App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion;


use Illuminate\Http\Request;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihHabilidad;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihLimite;
use App\Models\Acciones\Individuales\Salud\Vacunas\TipoVacuna;
use App\Models\Acciones\Individuales\Salud\Vacunas\Vacuna;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiVacunasListadosTrait
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
     * encontrar la lista de actividades Diarias
     */


    public function getListaTiposActividad(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  TipoVacuna::select([
                'tipo_vacunas.id',
                'tipo_vacunas.nombre',
                'tipo_vacunas.descripcion',
                'tipo_vacunas.sis_esta_id',
                'sis_estas.s_estado'

               

            ])
            ->join('sis_estas', 'tipo_vacunas.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getListaActividades(Request $request,$padrexx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Vacuna::select([
                'vacunas.id',
                'tipo_vacunas.nombre AS tipo_vacunas_id',
                'vacunas.nombre',
                'vacunas.descripcion',
                'vacunas.sis_esta_id',
                'sis_estas.s_estado',

            ])
                ->join('tipo_vacunas', 'vacunas.tipo_vacunas_id', '=', 'tipo_vacunas.id')
                ->join('sis_estas', 'vacunas.sis_esta_id', '=', 'sis_estas.id')
                ->where('vacunas.tipo_vacunas_id',$padrexx);
            return $this->getDt($dataxxxx, $request);
        }
    }


    
    
}
