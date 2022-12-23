<?php

namespace App\Traits\Fi\Upinnajx;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajUpi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait UpinnajxListadoTrait
{

    public  function getDttb($queryxxx, $requestx)
    {
        $datatabl = DataTables::eloquent($queryxxx);
        $datatabl->addColumn(
            'botonexx',
            function ($queryxxx) use ($requestx) {
                return  view($requestx->botonesx, [
                    'queryxxx' => $queryxxx,
                    'requestx' => $requestx,
                ]);
            }
        );

        $datatabl->addColumn(
            's_estado',
            function ($queryxxx) use ($requestx) {
                return  view($requestx->estadoxx, [
                    'queryxxx' => $queryxxx,
                    'requestx' => $requestx,
                ]);
            }

        );
        $datatabl->rawColumns(['botonexx', 's_estado']);
        return $datatabl->toJson();
    }


    public function getNnajUpi(Request $request, $nnajxxxx)
    {
        $request->routexxx = [$this->opciones['permisox'],'nnajdese'];
        $request->botonesx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.inactiva';
        $request->upiservicio = $this->opciones['rutacarp'] .
            $request->estadoxx = 'layouts.components.botones.estadosx';


        $dataxxxx =  NnajUpi::select([
            'nnaj_upis.id',
            'sis_depens.nombre',
            'nnaj_upis.sis_esta_id',
            'nnaj_upis.prm_principa_id',
            'sis_estas.s_estado',
        ])
            ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_estas', 'nnaj_upis.sis_esta_id', '=', 'sis_estas.id')
            ->where('nnaj_upis.sis_nnaj_id', $nnajxxxx);
        return $this->getDttb($dataxxxx, $request);
    }


    public function getFiDatosBasico(Request $request)
    {
        $request->routexxx = [$this->opciones['permisox']];
        $request->botonesx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.botonesapi';
        $request->upiservicio = $this->opciones['rutacarp'] .
            $request->estadoxx = 'layouts.components.botones.estadosx';
        $dataxxxx =  FiDatosBasico::select([
            'tipodocumento.nombre as tipodocumento',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_nacimis.d_nacimiento',
            'sexos.nombre as sexos',
            'fi_datos_basicos.sis_esta_id',
            'fi_datos_basicos.created_at',
            'sis_estas.s_estado',
            'fi_datos_basicos.user_crea_id',
        ])
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('parametros as tipodocumento', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocumento.id')
            ->join('parametros as sexos', 'nnaj_sexos.prm_sexo_id', '=', 'sexos.id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->where('sis_nnajs.prm_escomfam_id', 227);
        return $this->getDttb($dataxxxx, $request);
    }
}
