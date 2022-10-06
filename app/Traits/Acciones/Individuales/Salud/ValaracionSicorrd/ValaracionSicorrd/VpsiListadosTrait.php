<?php

namespace App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd;

use Illuminate\Http\Request;
use App\Models\sicosocial\Vsi;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\Vsrrd;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorno;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VpsiListadosTrait
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
     * encontrar la lisa de actas de encuentro
     */


    public function getListaxxx(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Vsrrd::select([
                'vsrrds.id',
                'vsrrds.fecha',
                'origen.nombre as origen',
                'atencion.nombre as atencion',
                'users.name',
                'vsrrds.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens as origen', 'vsrrds.sis_origen_id', '=', 'origen.id')
                ->join('sis_depens as atencion', 'vsrrds.sis_atenc_id', '=', 'atencion.id')
                ->join('users', 'vsrrds.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'vsrrds.sis_esta_id', '=', 'sis_estas.id')
                ->where('vsrrds.sis_nnaj_id', $padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }



    public function getPerteneceConvenio($edad, $padrexxx)
    {
        $convenio = null;
        if ($edad >= 18 && $edad < 29) {
            $convenio = SisDepen::select(['nnaj_deses.id', 'sis_depens.nombre', 'nnaj_upis.sis_depen_id'])
                ->join('nnaj_upis', 'sis_depens.id', '=', 'nnaj_upis.sis_depen_id')
                ->join('nnaj_deses', 'nnaj_upis.id', '=', 'nnaj_deses.nnaj_upi_id')
                ->where('nnaj_upis.sis_nnaj_id', $padrexxx)
                ->where('nnaj_upis.sis_esta_id', 1)
                ->where('nnaj_deses.sis_servicio_id', 4)
                ->orderBy('nnaj_deses.created_at', 'desc')
                ->first();
        }

        return $convenio;
    }

    public function getImpresionDiagVsi($padrexxx)
    {
        $impresionDiag = Vsi::select(['vsis.id', 'vsi_conceptos.concepto'])->leftjoin('vsi_conceptos', 'vsis.id', '=', 'vsi_conceptos.vsi_id')
            ->where('vsis.sis_nnaj_id', $padrexxx)->orderBy('vsis.created_at', 'desc')->first();
        return $impresionDiag;
    }

    public function getEntornoFactores()
    {
        $entornos = VsrrdEntorno::select('id', 'nombre')->with('factores:id,vsrrd_entorno_id,vsrrd_factor_id', 'factores.factor:id,nombre')->get();
        return $entornos;
    }
}
