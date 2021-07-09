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

    public function listaFosasignar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = MotivoEgreu::select(
				[
					'motivo_egreus.id',
                    'motivo_egresos.nombre as tipo',
                    'motivo_egreso_secus.nombre as subtipo',
                    'motivo_egreus.created_at',
					'motivo_egreus.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('motivo_egresos', 'motivo_egreus.motivoe_id', '=', 'motivo_egresos.id')
                ->join('motivo_egreso_secus', 'motivo_egreus.motivoese_id', '=', 'motivo_egreso_secus.id')
                ->join('sis_estas', 'motivo_egreus.sis_esta_id', '=', 'sis_estas.id');
                

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
					'motivo_egreso_secus.id',
                    'motivo_egreso_secus.nombre',
                    'motivo_egreso_secus.created_at',
					'motivo_egreso_secus.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'motivo_egreso_secus.sis_esta_id', '=', 'sis_estas.id')
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
