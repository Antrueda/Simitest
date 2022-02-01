<?php

namespace App\Traits\Indicadores;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Indicadores\Administ\Area;
use App\Models\Indicadores\Administ\InAreaindi;
use App\Models\Indicadores\Administ\InGrupregu;
use App\Models\Indicadores\Administ\InIndiliba;
use App\Models\Indicadores\Administ\InLibagrup;
use App\Models\Indicadores\Administ\InLineaBase;
use App\Models\Indicadores\Administ\InPregresp;
use App\Models\Indicadores\Administ\InIndicado;
use App\Models\Parametro;
use App\Models\Temacombo;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndimoduListadosTrait
{
    use DatatableTrait;
    /**
     * estructura base para las datatable con eloquent
     *
     * @param object $queryxxx
     * @param object $requestx
     * @return $queryxxx
     */
    public  function getEloquent($queryxxx, $requestx)
    {
        $queryxxx = datatables()
            ->eloquent($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )->addColumn(
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
        return  $queryxxx;
    }






    public function getRequestx($requestx)
    {
        $requestx->request->add([
            'botonesx' => $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi',
            'estadoxx' => $this->opciones['rutacomp'] . 'botones.estadosx'
        ]);
        return $requestx;
    }

    /**
     * listado de area para asiganar indicadores
     */
    public function getAreas(Request $requestx)
    {
        if ($requestx->ajax()) {
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'], 'areaindi'],
            ]);
            $requestx = $this->getRequestx($requestx);
            $queryxxx = Area::with([
                'sis_esta'
            ])->where('areas.sis_esta_id', 1);
            return $this->getEloquent($queryxxx, $requestx);
        }
    }
    /**
     * listado de indicadores asociados al área
     */
    public function getAreaindi(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'],  'indiliba'],
            ]);

            $queryxxx = InAreaindi::select([
                'in_areaindis.id',
                'in_indicados.s_indicador',
                'sis_estas.s_estado',
                'in_areaindis.sis_esta_id',
                'in_areaindis.area_id'
            ])
                ->join('in_indicados', 'in_areaindis.in_indicado_id', '=', 'in_indicados.id')
                ->join('sis_estas', 'in_areaindis.sis_esta_id', '=', 'sis_estas.id')
                ->where('in_areaindis.area_id', $padrexxx);
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    /**
     * listado de indicadores para asociar
     */
    public function getAreaindiAsignar(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'],  'indiliba'],
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.asignarx',
            ]);

            $queryxxx = InIndicado::select([
                'in_indicados.id',
                'in_indicados.s_indicador',
                'sis_estas.s_estado',
                'in_indicados.sis_esta_id',
            ])

                ->join('sis_estas', 'in_indicados.sis_esta_id', '=', 'sis_estas.id')
                ->whereNotIN('in_indicados.id', InAreaindi::where('area_id', $padrexxx)->get(['in_indicado_id']));
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    /**
     * listado de lineas base asociadas al indicador
     */
    public function getIndiliba(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'],  'libagrup'],
            ]);

            $queryxxx = InLineaBase::select([
                'in_indilibas.id', 'in_linea_bases.s_linea_base',
                'sis_estas.s_estado', 'in_indilibas.sis_esta_id',
                'nivelxxx.nombre as nivelxxx',
                'categori.nombre as categori',
            ])
                ->join('in_indilibas', 'in_linea_bases.id', '=', 'in_indilibas.in_linea_base_id')
                ->join('parametros as nivelxxx', 'in_indilibas.prm_nivelxxx_id', '=', 'nivelxxx.id')
                ->join('parametros as categori', 'in_indilibas.prm_categori_id', '=', 'categori.id')
                ->join('sis_estas', 'in_indilibas.sis_esta_id', '=', 'sis_estas.id')
                ->where('in_indilibas.in_areaindi_id', $padrexxx);
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    /**
     * listado de lineas base para asociar al área
     */
    public function getIndilibaAsignar(Request $requestx, $padrexxx)
    {

        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.asignarx',
                'routexxx' => [$this->opciones['permisox']],
                'padrexxx'=>$padrexxx
            ]);
            $notinxxx = InIndiliba::where('in_areaindi_id', $padrexxx)->get(['in_linea_base_id']);
            $queryxxx = InLineaBase::select(['id', 's_linea_base', 'sis_esta_id'])
                ->whereNotIn('id', $notinxxx);
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    /**
     * listado de lineas base asociadas al indicador
     */
    public function getLibagrup(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'],  'grupregu'],
            ]);

            $queryxxx = InLibagrup::select([
                'in_libagrups.id',
                'sis_estas.s_estado', 'in_libagrups.sis_esta_id'
            ])
                ->join('sis_estas', 'in_libagrups.sis_esta_id', '=', 'sis_estas.id')
                ->where('in_libagrups.in_indiliba_id', $padrexxx);
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    /**
     * listado de lineas base asociadas al indicador
     */
    public function getGrupregu(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'],  'pregresp'],
            ]);

            $queryxxx = InGrupregu::select([
                'in_grupregus.id',
                'parametros.nombre as parametr',
                'in_grupregus.prm_disparar_id',
                'temacombos.nombre as pregunta',
                'sis_docfuens.nombre as docfuen',
                'sis_estas.s_estado',
                'in_grupregus.sis_esta_id'
            ])
                ->join('sis_estas', 'in_grupregus.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros', 'in_grupregus.prm_disparar_id', '=', 'parametros.id')
                ->join('temacombos', 'in_grupregus.temacombo_id', '=', 'temacombos.id')
                ->join('sis_tcampos', 'temacombos.sis_tcampo_id', '=', 'sis_tcampos.id')
                ->join('sis_tablas', 'sis_tcampos.sis_tabla_id', '=', 'sis_tablas.id')
                ->join('sis_docfuens', 'sis_tablas.sis_docfuen_id', '=', 'sis_docfuens.id')
                ->where('in_grupregus.in_libagrup_id', $padrexxx);
            return $this->getEloquent($queryxxx, $requestx);
        }
    }
    /**
     * listado de lineas base asociadas al indicador
     */
    public function getGrupreguAsignar(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.asignarx',
                'routexxx' => [$this->opciones['permisox'],  'pregresp'],
            ]);

            $queryxxx = Temacombo::select([
                'temacombos.id',
                'temacombos.nombre',
                'sis_docfuens.nombre as docfuen',
            ])
                ->join('sis_tcampos', 'temacombos.sis_tcampo_id', '=', 'sis_tcampos.id')
                ->join('sis_tablas', 'sis_tcampos.sis_tabla_id', '=', 'sis_tablas.id')
                ->join('sis_docfuens', 'sis_tablas.sis_docfuen_id', '=', 'sis_docfuens.id')
                ->where(function ($queryxxx) use ($padrexxx) {
                    $notinxxx = InGrupregu::where('in_libagrup_id', $padrexxx)->get(['temacombo_id']);
                    $queryxxx->where('temacombos.sis_tcampo_id', '!=', null);
                    $queryxxx->where('temacombos.sis_esta_id', 1);
                    $queryxxx->whereNotin('temacombos.id', $notinxxx);
                });

            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    /**
     * listado de lineas base asociadas al indicador
     */
    public function getPregresp(Request $requestx, $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'routexxx' => [$this->opciones['permisox'],  'pregresp'],
            ]);

            $queryxxx = InPregresp::select([
                'in_pregresps.id',
                'parametros.nombre as parametr',
                'in_pregresps.prm_respuest_id',
                'sis_estas.s_estado',
                'in_pregresps.sis_esta_id'
            ])
                ->join('sis_estas', 'in_pregresps.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros', 'in_pregresps.prm_respuest_id', '=', 'parametros.id')
                ->where('in_pregresps.in_grupregu_id', $padrexxx);
            return $this->getEloquent($queryxxx, $requestx);
        }
    }
    /**
     * listado de lineas base asociadas al indicador
     */
    public function getPregrespAsignar(Request $requestx, InGrupregu $padrexxx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.asignarx',
                'routexxx' => [$this->opciones['permisox'],  'pregresp'],
            ]);

            $queryxxx = Parametro::select([
                'parametros.id',
                'parametros.nombre',
            ])
                ->join('parametro_temacombo', 'parametros.id', '=', 'parametro_temacombo.parametro_id')
                ->where(function ($queryxxx) use ($padrexxx) {
                    $notinxxx = InPregresp::where('in_grupregu_id', $padrexxx->id)->get(['prm_respuest_id']);
                    $queryxxx->where('parametro_temacombo.temacombo_id', $padrexxx->temacombo_id);
                    $queryxxx->where('parametro_temacombo.sis_esta_id', 1);
                    $queryxxx->whereNotin('parametros.id', $notinxxx);
                });
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    /**
     * Listado de indicadores creados
     *
     * @param Request $requestx
     * @return void
     */
    public function getIndicado(Request $requestx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.acciones',
                'routexxx' => [$this->opciones['permisox'],  'pregresp'],
            ]);

            $queryxxx = InIndicado::select([
                'in_indicados.id',
                'in_indicados.s_indicador',
                'sis_estas.s_estado',
                'in_indicados.sis_esta_id',
            ])
                ->join('sis_estas', 'in_indicados.sis_esta_id', '=', 'sis_estas.id')
                
                
                ;
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    public function getLinebase(Request $requestx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.acciones',
                'routexxx' => [$this->opciones['permisox'],  'pregresp'],
            ]);

            $queryxxx = InLineaBase::select([
                'in_linea_bases.id',
                'in_linea_bases.s_linea_base',
                'sis_estas.s_estado',
                'in_linea_bases.sis_esta_id',
            ])
                ->join('sis_estas', 'in_linea_bases.sis_esta_id', '=', 'sis_estas.id');
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    public function getIndinnajIndexLista(Request $requestx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.acciones',
                'routexxx' => [$this->opciones['permisox'],  'indiagno'],
            ]);

            $queryxxx = FiDatosBasico::select([
                'fi_datos_basicos.id',
                'nnaj_docus.s_documento',
                'tipodocu.nombre as tipodocu',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_datos_basicos.s_apodo',
               
                'tipoblac.nombre as tipoblac',
                'estrateg.nombre as estrateg',
                'vestimen.nombre as vestimen',
                
               
                'sis_estas.s_estado',
                'fi_datos_basicos.sis_esta_id',
            ])
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as tipoblac', 'fi_datos_basicos.prm_tipoblaci_id', '=', 'tipoblac.id')
                ->join('parametros as estrateg', 'fi_datos_basicos.prm_estrateg_id', '=', 'estrateg.id')
                ->join('parametros as vestimen', 'fi_datos_basicos.prm_vestimenta_id', '=', 'vestimen.id')

                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ;
           
            return $this->getEloquent($queryxxx, $requestx);
        }
    }

    public function getIndinnajDiagnostLista(Request $requestx)
    {
        if ($requestx->ajax()) {
            $requestx = $this->getRequestx($requestx);
            $requestx->request->add([
                'botonesx' => $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.acciones',
                'routexxx' => [$this->opciones['permisox'],  'indiagno'],
            ]);

            $queryxxx = InIndicado::select([
                'in_indicados.id',
                'in_indicados.s_indicador',
                'sis_estas.s_estado',
                'in_indicados.sis_esta_id',
                'in_linea_bases.s_linea_base',
            ])
                ->join('sis_estas', 'in_indicados.sis_esta_id', '=', 'sis_estas.id')
                ->join('in_areaindis', 'in_indicados.id', '=', 'in_areaindis.in_indicado_id')
                ->join('in_indilibas', 'in_areaindis.id', '=', 'in_indilibas.in_areaindi_id')
                ->join('in_linea_bases', 'in_indilibas.in_linea_base_id', '=', 'in_linea_bases.id')
                ;
            return $this->getEloquent($queryxxx, $requestx);
        }
    }
}
