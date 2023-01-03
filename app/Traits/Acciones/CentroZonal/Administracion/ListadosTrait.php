<?php

namespace App\Traits\Acciones\CentroZonal\Administracion;


use App\Models\fichaobservacion\FosTse;
use App\Models\Usuario\Estusuario;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;
use App\Models\Acciones\Individuales\SocialLegal\AsociarCaso;
use App\Models\Acciones\Individuales\SocialLegal\SeguimientoCaso;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Models\Acciones\Individuales\SocialLegal\TipoCaso;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function listaTipocaso(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = TipoCaso::select(
				[
					'tipo_casos.id',
					'tipo_casos.nombre',
                    'tipo_casos.created_at',
					'tipo_casos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('sis_estas', 'tipo_casos.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaAsignarCaso(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = AsociarCaso::select(
				[
					'asociar_casos.id',
                    'tipo_casos.nombre as curso',
                    'tema_casos.nombre as modulo',
                    'seguimiento_casos.nombre as segui',
                    'asociar_casos.created_at',
					'asociar_casos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('tipo_casos', 'asociar_casos.tipo_id', '=', 'tipo_casos.id')
                ->join('tema_casos', 'asociar_casos.tema_id', '=', 'tema_casos.id')
                ->join('seguimiento_casos', 'asociar_casos.segui_id', '=', 'seguimiento_casos.id')
                ->join('sis_estas', 'asociar_casos.sis_esta_id', '=', 'sis_estas.id');
                

            return $this->getDt($dataxxxx, $request);
        }
    }




    public function listaTemaCaso(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = TemaCaso::select(
				[
					'tema_casos.id',
                    'tema_casos.nombre',
                    'tema_casos.created_at',
					'tema_casos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'tema_casos.sis_esta_id', '=', 'sis_estas.id')
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaSeguiCaso(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = SeguimientoCaso::select(
				[
					'seguimiento_casos.id',
                    'seguimiento_casos.nombre',
                    'seguimiento_casos.created_at',
					'seguimiento_casos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'seguimiento_casos.sis_esta_id', '=', 'sis_estas.id')
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
