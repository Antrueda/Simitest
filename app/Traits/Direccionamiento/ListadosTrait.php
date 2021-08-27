<?php

namespace App\Traits\Direccionamiento;

use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Direccionamiento\Direccionamiento;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Parametro;
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
                'direccionamientos.incompleto',
                'sis_estas.s_estado'
            ])
                ->join('direccion_inst', 'direccionamientos.id', '=', 'direccion_inst.direc_id')
                ->join('sis_depens', 'direccionamientos.upi_id', '=', 'sis_depens.id')
                ->join('parametros as seguimiento', 'direccion_inst.seguimiento_id', '=', 'seguimiento.id')
                ->join('parametros as tipoentidad', 'direccion_inst.prm_tipoenti_id', '=', 'tipoentidad.id')
                ->join('parametros as remision', 'direccionamientos.tipo_id', '=', 'remision.id')
                ->join('users', 'direccionamientos.userd_doc', '=', 'users.id')
                ->join('sis_estas', 'direccionamientos.sis_esta_id', '=', 'sis_estas.id')
                ->where('direccionamientos.incompleto', 0);
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
                ['comboxxx' => ['prm_sexo_id', [], '']],
                ['comboxxx' => ['prm_identidad_genero_id', [], '']],
                ['comboxxx' => ['prm_orientacion_sexual_id', [], '']],
                ['comboxxx' => ['prm_etnia_id', [], '']],
                ['comboxxx' => ['prm_poblacion_etnia_id', [], '','']],
                ['comboxxx' => ['prm_cuentadisc_id', [], '']],
                ['comboxxx' => ['prm_discapacidad_id', [], '']],
                ['comboxxx' => ['prm_condicion_id', [], '']],
                ['comboxxx' => ['prm_certifica_id', [], '']],//11
                ['comboxxx' => ['departamento_cond_id', [], '']],
                ['comboxxx' => ['municipio_cond_id', [], '']],
                ['comboxxx' => ['prm_cabeza_id', [], '']],
                // ['comboxxx' => ['edad', [], '']],
            ];
            
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first();
            if (isset($document->nnaj_docu->id)) {
                $expedici = $document->nnaj_docu->sis_municipio;
                if($document->sis_nnaj->fi_saluds==null){
                    $saludxxx=null;
                }else{
                    $saludxxx = $document->sis_nnaj->fi_saluds;
                }
                if($document->sis_nnaj->fi_violencias==null){
                    $violencx=null;
                }else{
                    $violencx = $document->sis_nnaj->fi_violencias;
                }
                echo $saludxxx;
                $sexoxxxx = $document->nnaj_sexo;
                $etniaxxx = $document->nnaj_fi_csd;
                $dataxxxx[0]['comboxxx'][1] = Tema::combo(3, true, true);
                $dataxxxx[0]['comboxxx'][2] = $document->nnaj_docu->prm_tipodocu_id;
                $dataxxxx[1]['comboxxx'][1] = SisPai::combo(true, true);
                $dataxxxx[1]['comboxxx'][2] = $expedici->sis_departam->sis_pai_id;
                $dataxxxx[2]['comboxxx'][1] = SisDepartam::combo($expedici->sis_departam->sis_pai_id, true);
                $dataxxxx[2]['comboxxx'][2] = $expedici->sis_departam_id;
                $dataxxxx[3]['comboxxx'][1] = SisMunicipio::combo($expedici->sis_departam_id, true);
                $dataxxxx[3]['comboxxx'][2] = $expedici->id;
                $dataxxxx[4]['comboxxx'][1] = Tema::combo(11, true, true);
                $dataxxxx[4]['comboxxx'][2] = $sexoxxxx->prm_sexo_id;
                $dataxxxx[5]['comboxxx'][1] = Tema::combo(12, true, true);
                $dataxxxx[5]['comboxxx'][2] = $sexoxxxx->prm_identidad_genero_id;
                $dataxxxx[6]['comboxxx'][1] = Tema::combo(13, true, true);
                $dataxxxx[6]['comboxxx'][2] = $sexoxxxx->prm_orientacion_sexual_id;
                $dataxxxx[7]['comboxxx'][1] = Tema::combo(20, true, true);
                $dataxxxx[7]['comboxxx'][2] = $etniaxxx->prm_etnia_id;
                if($etniaxxx->prm_etnia_id!=157){
                    $dataxxxx[8]['comboxxx'][1] = Parametro::find(235)->ComboAjaxUno;
                    $dataxxxx[8]['comboxxx'][2] = Parametro::find(235)->ComboAjaxUno;
                }else{
                    $dataxxxx[8]['comboxxx'][1] = Tema::combo(61, true, true);
                    $dataxxxx[8]['comboxxx'][2] = $etniaxxx->prm_poblacion_etnia_id;
                }

                if($saludxxx!=null){
                    $dataxxxx[9]['comboxxx'][1] = Tema::combo(373, true, true);
                    $dataxxxx[9]['comboxxx'][2] = $saludxxx->prm_tiendisc_id;
                    $dataxxxx[10]['comboxxx'][1] = Tema::combo(24, true, true);
                    $dataxxxx[10]['comboxxx'][2] = $saludxxx->prm_tipodisca_id;
                }else{
                    $dataxxxx[9]['comboxxx'][1] = Tema::combo(373, true, true);
                    $dataxxxx[9]['comboxxx'][2] = Tema::combo(373, true, true);
                    $dataxxxx[10]['comboxxx'][1] = Tema::combo(24, true, true);
                    $dataxxxx[10]['comboxxx'][2] = Tema::combo(24, true, true);
                }

                 if($violencx!=null){
                    $dataxxxx[11]['comboxxx'][1] = Tema::combo(57, true, true);
                    $dataxxxx[11]['comboxxx'][2] = $violencx->i_prm_condicion_presenta_id;
                    $dataxxxx[12]['comboxxx'][1] = Tema::combo(373, true, true);
                    $dataxxxx[12]['comboxxx'][2] = $violencx->i_prm_tiene_certificado_id;
                    $dataxxxx[13]['comboxxx'][1] = SisDepartam::combo(2, true);
                    $dataxxxx[13]['comboxxx'][2] = $violencx->i_prm_depto_certifica_id;
                    $dataxxxx[14]['comboxxx'][1] = SisMunicipio::combo($violencx->i_prm_depto_certifica_id, true);
                    $dataxxxx[14]['comboxxx'][2] = $violencx->i_prm_municipio_certifica_id;
                    $dataxxxx[15]['comboxxx'][1] = Tema::combo(373, true, true);
                    $dataxxxx[15]['comboxxx'][2] = $violencx->prm_cabefami_id;

                    
                }else{
                    $dataxxxx[11]['comboxxx'][1] = Tema::combo(57, true, true);
                    $dataxxxx[11]['comboxxx'][2] = Tema::combo(57, true, true);
                    $dataxxxx[12]['comboxxx'][1] = Tema::combo(373, true, true);
                    $dataxxxx[12]['comboxxx'][2] = Tema::combo(373, true, true);
                    $dataxxxx[13]['comboxxx'][1] = SisDepartam::combo(2, true);
                    $dataxxxx[13]['comboxxx'][2] = SisDepartam::combo(2, true);
                    $dataxxxx[14]['comboxxx'][1] = SisMunicipio::combo(1, true);
                    $dataxxxx[14]['comboxxx'][2] = SisMunicipio::combo(1, true);
                    $dataxxxx[15]['comboxxx'][1] = Tema::combo(373, true, true);
                    $dataxxxx[15]['comboxxx'][2] = Tema::combo(373, true, true);
               }
               
            }

            return response()->json($dataxxxx);
        }
    }


    public function getListaFamiliaAsignar(Request $request)
    {   
       
        if ($request->ajax()) {
         
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisNnaj::select([
            'sis_nnajs.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_compfamis.s_telefono',
            'sis_nnajs.sis_esta_id',
            'nnaj_nacimis.d_nacimiento',
            'sis_nnajs.created_at',
            'sis_estas.s_estado',
            
            ])
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
            ->join('fi_compfamis', 'sis_nnajs.id', '=', 'fi_compfamis.sis_nnaj_id')
            ->where('fi_compfamis.prm_reprlega_id', 227)
            ->wherein('sis_nnajs.id', FiCompfami::select('sis_nnaj_id')->where('sis_nnajnnaj_id',$request->padrexxx )->get())->groupBy(
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_compfamis.s_telefono',
                'sis_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',);

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getCompselect(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                ['comboxxx' => ['prm_docuaco_id', [], '']],
              ];
            
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->nnaj_docu;
            //echo $document;
            if (isset($document->id)) {
                $dataxxxx[0]['comboxxx'][1] = Tema::combo(3, true, true);
                $dataxxxx[0]['comboxxx'][2] = $document->prm_tipodocu_id;
                // $dataxxxx[4]['comboxxx'][1] = $document->fi_datos_basico->nnaj_nacimi->Edad;
                // $dataxxxx[4]['comboxxx'][2] = $document->fi_datos_basico->nnaj_nacimi->Edad;
            }

            return response()->json($dataxxxx);
        }
    }



}

