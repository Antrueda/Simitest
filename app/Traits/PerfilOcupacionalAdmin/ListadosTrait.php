<?php

namespace App\Traits\PerfilOcupacionalAdmin;

use Illuminate\Http\Request;
use App\Traits\DatatableTrait;
use App\Models\Usuario\Estusuario;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioCategoria;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioComponente;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioItem;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function listaComponentesDesempenio(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'perfilocupacionalitems'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';

            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = FpoDesempenioComponente::select(
				[
					'fpo_desempenio_componentes.id',
					'fpo_desempenio_componentes.nombre',
                    'fpo_desempenio_componentes.created_at',
					'fpo_desempenio_componentes.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
			->join('sis_estas', 'fpo_desempenio_componentes.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaDesempenioCategorias(Request $request)
    {

        if ($request->ajax()) {
           $request->routexxx = [$this->opciones['routxxxx'],''];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';

            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = FpoDesempenioCategoria::select(
				[
					'fpo_desempenio_categorias.id',
					'fpo_desempenio_categorias.nombre',
                    'fpo_desempenio_categorias.created_at',
					'fpo_desempenio_categorias.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
			->join('sis_estas', 'fpo_desempenio_categorias.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaComponentesDesempenioItems($model, Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],''];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = FpoDesempenioItem::select(
				[
					'fpo_desempenio_items.id',
                    'fpo_desempenio_items.item_nombre as nombre',
                    'fpo_desempenio_categorias.id as idcategoria',
                    'fpo_desempenio_categorias.nombre as categoria',
                    'fpo_desempenio_componentes.id as iddesempenio',
                    'fpo_desempenio_componentes.nombre as desempenio',
					'fpo_desempenio_items.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->leftJoin('fpo_desempenio_categorias', 'fpo_desempenio_items.categoria_id', '=', 'fpo_desempenio_categorias.id')
                ->join('fpo_desempenio_componentes', 'fpo_desempenio_items.desempenio_id', '=', 'fpo_desempenio_componentes.id')
                ->join('sis_estas', 'fpo_desempenio_items.sis_esta_id', '=', 'sis_estas.id')
                ->where('fpo_desempenio_items.desempenio_id',$model);
                

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
