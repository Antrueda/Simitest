<?php

namespace App\Traits\Vsi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Pivotes\VsiTipoVio;
use App\Models\sicosocial\Vsi;
use App\Traits\DatatableTrait;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiDinfamPadre;
use App\Models\sicosocial\VsiDinfamMadre;
use App\Models\sicosocial\VsiRedsocPasado;
use App\Models\sicosocial\VsiRedsocActual;
use App\Models\sicosocial\VsiFacProtector;
use App\Models\sicosocial\VsiFacRiesgo;

use App\Models\sicosocial\VsiPotencialidad;
use App\Models\sicosocial\VsiMeta;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait VsiTrait
{
    use DatatableTrait;
    public  function getDtVsi($queryxxx, $requestx)
    {

        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {

                    $puedexxx = $this->getPuedeCargar([
                        'estoyenx' => 1,
                        'fechregi' => explode(' ',$queryxxx->created_at)[0]
                    ]);
                    /**
                     * validaciones para los permisos
                     */
                    $requestx->puedever = auth()->user()->can($requestx->routexxx[0] . '-leer');
                    $requestx->pueditar = auth()->user()->can($requestx->routexxx[0] . '-editar');
                    if ($requestx->pueditar == false || $puedexxx['tienperm'] == false) {
                        $requestx->pueditar = false;
                    }
                    $requestx->puedinac = auth()->user()->can($requestx->routexxx[0] . '-borrar');
                    if ($requestx->puedinac == false || $puedexxx['tienperm'] == false) {
                        $requestx->puedinac = false;
                    }
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
    public function getNnajsVsi($request)
    {

        $dataxxxx =  FiDatosBasico::select([
            'fi_datos_basicos.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.s_apodo',
            'nnaj_sexos.s_nombre_identitario',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->where('fi_datos_basicos.sis_esta_id', 1);
        return $this->getDt($dataxxxx, $request);
    }

    public function getVsis($request)
    {
        $dataxxxx =  Vsi::select([
            'vsis.id',
            'vsis.fecha',
            'sis_depens.nombre',
            'vsis.sis_nnaj_id',
            'vsis.sis_esta_id',
            'vsis.created_at',
            'sis_estas.s_estado'
        ])
            ->join('sis_depens', 'vsis.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_estas', 'vsis.sis_esta_id', '=', 'sis_estas.id')
            ->where(function ($queryxxx) use ($request) {
                $usuariox=Auth::user();
                if (!$usuariox->hasRole([Role::find(1)->name])) {
                    $queryxxx->where('vsis.sis_esta_id', 1);
                }
                $queryxxx->where('vsis.sis_nnaj_id', $request->padrexxx);
            });
        return $this->getDtVsi($dataxxxx, $request);
    }

    public function getDatosVincula($request)
    {
        $dataxxxx =  VsiDatosVincula::select([
            'vsi_datos_vinculas.id',
            'vsi_datos_vinculas.dia',
            'vsi_datos_vinculas.mes',
            'vsi_datos_vinculas.vsi_id',
            'vsi_datos_vinculas.ano',
            'vsi_datos_vinculas.sis_esta_id',
            'razon.nombre as razon',
            'sis_estas.s_estado'

        ])
            ->join('parametros as razon', 'vsi_datos_vinculas.prm_razon_id', '=', 'razon.id')
            ->join('sis_estas', 'vsi_datos_vinculas.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_datos_vinculas.vsi_id', $request->padrexxx);
        return $this->getDtDatosVincula($dataxxxx, $request);
    }

    public function getPadres($request)
    {
        $dataxxxx =  VsiDinfamPadre::select([
            'vsi_dinfam_padres.id',
            'convive.nombre as convive',
            'vsi_dinfam_padres.dia',
            'vsi_dinfam_padres.mes',
            'vsi_dinfam_padres.ano',
            'vsi_dinfam_padres.hijo',
            'vsi_dinfam_padres.created_at',
            'separado.nombre as separado',
            'vsi_dinfam_padres.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('parametros as convive', 'vsi_dinfam_padres.prm_convive_id', '=', 'convive.id')
            ->leftJoin('parametros as separado', 'vsi_dinfam_padres.prm_separa_id', '=', 'separado.id')
            ->join('sis_estas', 'vsi_dinfam_padres.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_dinfam_padres.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getMadres($request)
    {
        $dataxxxx =  VsiDinfamMadre::select([
            'vsi_dinfam_madres.id',
            'convive.nombre as convive',
            'vsi_dinfam_madres.dia',
            'vsi_dinfam_madres.mes',
            'vsi_dinfam_madres.ano',
            'vsi_dinfam_madres.created_at',
            'vsi_dinfam_madres.hijo',
            'separado.nombre as separado',
            'vsi_dinfam_madres.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('parametros as convive', 'vsi_dinfam_madres.prm_convive_id', '=', 'convive.id')
            ->leftJoin('parametros as separado', 'vsi_dinfam_madres.prm_separa_id', '=', 'separado.id')
            ->join('sis_estas', 'vsi_dinfam_madres.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_dinfam_madres.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getTipoViolencia($request)
    {
        $dataxxxx =  VsiTipoVio::select([
            'vsi_tipo_vios.id',
            'tipo.nombre as tipo',
            'vsi_tipo_vios.created_at',
            'forma.nombre as forma',
            'vsi_tipo_vios.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('parametros as tipo', 'vsi_tipo_vios.tipo_id', '=', 'tipo.id')
            ->join('parametros as forma', 'vsi_tipo_vios.forma_id', '=', 'forma.id')
            ->join('sis_estas', 'vsi_tipo_vios.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_tipo_vios.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getRedesPasado($request)
    {
        $dataxxxx =  VsiRedsocPasado::select([
            'vsi_redsoc_pasados.id',
            'vsi_redsoc_pasados.nombre',
            'vsi_redsoc_pasados.vsi_id',
            'vsi_redsoc_pasados.ano_prestacion',
            'vsi_redsoc_pasados.dia',
            'vsi_redsoc_pasados.mes',
            'vsi_redsoc_pasados.created_at',
            'vsi_redsoc_pasados.ano',
            'vsi_redsoc_pasados.servicio',
            'vsi_redsoc_pasados.sis_esta_id',
            'sis_estas.s_estado'
        ])

            ->join('sis_estas', 'vsi_redsoc_pasados.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_redsoc_pasados.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getRedesActuales($request)
    {
        $dataxxxx =  VsiRedsocActual::select([
            'vsi_redsoc_actuals.id',
            'vsi_redsoc_actuals.vsi_id',
            'tiporedx.nombre as tiporedx',
            'vsi_redsoc_actuals.nombre',
            'vsi_redsoc_actuals.servicio',
            'vsi_redsoc_actuals.telefono',
            'vsi_redsoc_actuals.direccion',
            'vsi_redsoc_actuals.created_at',
            'vsi_redsoc_actuals.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('parametros as tiporedx', 'vsi_redsoc_actuals.prm_tipo_id', '=', 'tiporedx.id')
            ->join('sis_estas', 'vsi_redsoc_actuals.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_redsoc_actuals.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getVsiFacProtector($request)
    {
        $dataxxxx =  VsiFacProtector::select([
            'vsi_fac_protectors.id',
            'vsi_fac_protectors.vsi_id',
            'vsi_fac_protectors.protector',
            'vsi_fac_protectors.created_at',
            'vsi_fac_protectors.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'vsi_fac_protectors.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_fac_protectors.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getVsiFacRiesgo($request)
    {
        $dataxxxx =  VsiFacRiesgo::select([
            'vsi_fac_riesgos.id',
            'vsi_fac_riesgos.vsi_id',
            'vsi_fac_riesgos.riesgo',
            'vsi_fac_riesgos.created_at',
            'vsi_fac_riesgos.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'vsi_fac_riesgos.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_fac_riesgos.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getVsiPotencialidad($request)
    {
        $dataxxxx =  VsiPotencialidad::select([
            'vsi_potencialidads.id',
            'vsi_potencialidads.vsi_id',
            'vsi_potencialidads.potencialidad',
            'vsi_potencialidads.created_at',
            'vsi_potencialidads.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'vsi_potencialidads.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_potencialidads.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getVsiMeta($request)
    {
        $dataxxxx =  VsiMeta::select([
            'vsi_metas.id',
            'vsi_metas.vsi_id',
            'vsi_metas.meta',
            'vsi_metas.created_at',
            'vsi_metas.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'vsi_metas.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsi_metas.vsi_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
}
