<?php

namespace App\Traits\MotivoAdmin;

use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosStsesTest;
use App\Models\fichaobservacion\FosTse;
use App\Models\Usuario\Estusuario;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;


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
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = MotivoEgreso::select(
				[
					'fos_tses.id',
					'fos_tses.nombre',
                    'areas.nombre as s_area',
                    'fos_tses.created_at',
					'fos_tses.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('areas', 'fos_tses.area_id', '=', 'areas.id')
				->join('sis_estas', 'fos_tses.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaFosasignar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = MotivoEgreu::select(
				[
					'fos_seguimientos.id',
                    'fos_tses.nombre as tipo',
                    'fos_stses.nombre as subtipo',
                    'fos_seguimientos.created_at',
					'fos_seguimientos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('fos_tses', 'fos_seguimientos.fos_tse_id', '=', 'fos_tses.id')
                ->join('fos_stses', 'fos_seguimientos.fos_stses_id', '=', 'fos_stses.id')
                ->join('sis_estas', 'fos_seguimientos.sis_esta_id', '=', 'sis_estas.id');
                

            return $this->getDt($dataxxxx, $request);
        }
    }




    public function listaFossts(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = MotivoEgresoSecu::select(
				[
					'fos_stses.id',
                    'fos_stses.nombre',
                    'fos_stses.created_at',
					'fos_stses.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'fos_stses.sis_esta_id', '=', 'sis_estas.id')
                ;

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
