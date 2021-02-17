<?php

namespace app\Traits\Administracion\Carguedocu;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\Sistema\SisNnaj;
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

    public function listaNnaj(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'cardocfi'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $request->upiservicio = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.upiservicio';
            $dataxxxx =  FiDatosBasico::select([
                'fi_datos_basicos.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_datos_basicos.sis_nnaj_id',
                'fi_datos_basicos.sis_esta_id',
                'fi_datos_basicos.created_at',
                'sis_estas.s_estado',
                'fi_datos_basicos.user_crea_id',
            ])
                ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                // ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
                ->where('sis_nnajs.prm_escomfam_id', 227);

            return $this->getDtUpi($dataxxxx, $request);
        }
    }

    public function listaDocumentos(Request $request,SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'cardocfi'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  FiDocumentosAnexa::select([
                'fi_documentos_anexas.id',
                'parametros.nombre',
                'fi_documentos_anexas.s_ruta',
                'fi_documentos_anexas.created_at',
                'fi_documentos_anexas.sis_esta_id',
                'sis_estas.s_estado',

            ])
                ->join('parametros', 'fi_documentos_anexas.i_prm_documento_id', '=', 'parametros.id')
                ->join('sis_estas', 'fi_documentos_anexas.sis_esta_id', '=', 'sis_estas.id')
                ->where('fi_documentos_anexas.sis_nnaj_id',$padrexxx->id);

            return $this->getDt($dataxxxx, $request);
        }
    }
}
