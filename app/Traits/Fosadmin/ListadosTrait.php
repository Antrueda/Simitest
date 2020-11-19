<?php

namespace App\Traits\Fosadmin;


use App\Models\fichaobservacion\FosStse;
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
            $request->routexxx = [$this->opciones['routxxxx'],'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = FosTse::select(
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

    public function listaFossts(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = FosStse::select(
				[
					'fos_stses.id',
                    'fos_stses.nombre',
                    'fos_stses.created_at',
					'areas.nombre as s_area',
					'fos_tses.nombre as s_seguimiento',
					'fos_stses.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('fos_tses', 'fos_stses.fos_tse_id', '=', 'fos_tses.id')
				->join('areas', 'fos_tses.area_id', '=', 'areas.id')
                ->join('sis_estas', 'fos_tses.sis_esta_id', '=', 'sis_estas.id')
                ->where('fos_stses.fos_tse_id',$padrexxx->id)
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
                    'formular' => 2480
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
                    'formular' => 2481
                ])
            );
        }
    }
}
