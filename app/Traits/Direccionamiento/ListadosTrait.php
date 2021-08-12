<?php

namespace App\Traits\Direccionamiento;

use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Direccionamiento\Direccionamiento;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sistema\SisDepartam;
use app\Models\sistema\SisMunicipio;
use app\Models\sistema\SisNnaj;
use app\Models\sistema\SisPai;
use App\Models\Tema;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
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


    public function getListaxxx(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Direccionamiento::select([
                'direccionamientos.id',
                'direccionamientos.fecha',
                'users.name as name',
                'seguimiento.nombre as seguimiento',
                'tipoentidad.nombre as tipoentidad',
                'remision.nombre as remision',
                'sis_depens.nombre as dependencia',
                'direccionamientos.sis_esta_id', 
                'sis_estas.s_estado'
            ])
                ->join('direccion_inst', 'direccionamientos.id', '=', 'direccion_inst.direc_id')
                ->join('sis_depens', 'direccionamientos.upi_id', '=', 'sis_depens.id')
                ->join('parametros as seguimiento', 'direccion_inst.seguimiento_id', '=', 'seguimiento.id')
                ->join('parametros as tipoentidad', 'direccion_inst.prm_tipoenti_id', '=', 'tipoentidad.id')
                ->join('parametros as remision', 'direccionamientos.tipo_id', '=', 'remision.id')
                ->join('users', 'direccionamientos.userd_doc', '=', 'users.id')
                ->join('sis_estas', 'direccionamientos.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getListaNnajsAsignaar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  FiDatosBasico::select([
                'fi_datos_basicos.sis_nnaj_id as id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_datos_basicos.s_apodo',
                'nnaj_docus.s_documento',
                'nnaj_nacimis.d_nacimiento',
                'nnaj_sexos.s_nombre_identitario',
                'fi_datos_basicos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id');
            return $this->getDt($dataxxxx, $request);
        }
    }
  
    public function getNnajselect(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                ['comboxxx' => ['prm_tipodocu_id', [], '']],
                ['comboxxx' => ['sis_pai_id', [], '']],
                ['comboxxx' => ['sis_departam_id', [], '']],
                ['comboxxx' => ['sis_municipio_id', [], '']],
                // ['comboxxx' => ['edad', [], '']],
            ];
            
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->nnaj_docu;
            if (isset($document->id)) {
                $expedici = $document->sis_municipio;
                $dataxxxx[0]['comboxxx'][1] = Tema::combo(3, true, true);
                $dataxxxx[0]['comboxxx'][2] = $document->prm_tipodocu_id;
                $dataxxxx[1]['comboxxx'][1] = SisPai::combo(true, true);
                $dataxxxx[1]['comboxxx'][2] = $expedici->sis_departam->sis_pai_id;
                $dataxxxx[2]['comboxxx'][1] = SisDepartam::combo($expedici->sis_departam->sis_pai_id, true);
                $dataxxxx[2]['comboxxx'][2] = $expedici->sis_departam_id;
                // $dataxxxx[2][2] = $expedici->sis_departam_id;
                $dataxxxx[3]['comboxxx'][1] = SisMunicipio::combo($expedici->sis_departam_id, true);
                $dataxxxx[3]['comboxxx'][2] = $expedici->id;
                $dataxxxx[3]['comboxxx'][1] = SisMunicipio::combo($expedici->sis_departam_id, true);
                // $dataxxxx[4]['comboxxx'][1] = $document->fi_datos_basico->nnaj_nacimi->Edad;
                // $dataxxxx[4]['comboxxx'][2] = $document->fi_datos_basico->nnaj_nacimi->Edad;
            }

            return response()->json($dataxxxx);
        }
    }
}

