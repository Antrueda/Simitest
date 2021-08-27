<?php

namespace App\Traits\Direccionamiento\Direccionamiento;

use App\Models\Parametro;
use App\Models\sistema\SisDepartam;
use App\Models\Sistema\SisEsta;
use app\Models\sistema\SisMunicipio;
use app\Models\sistema\SisPai;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{

    public function getVista($dataxxxx)
    {
        // lista de localidades
        $this->opciones['sis_localidads'] = $this->getLocalidadesCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['prm_accion_id'] = $this->getTemacomboCT([
            'temaxxxx' => 394,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['tipodocu'] = $this->getTemacomboCT([
            'temaxxxx' => 3,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['tipodocr'] = $this->getTemacomboCT([
            'temaxxxx' => 3,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['recursos'] = $this->getAgRecursosComboCT([
            'cabecera' => false,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['entidades'] = $this->getSisEntidadComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['funccont'] = $this->getFuncionarioComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['sis_depens'] = $this->getDepenTerritorioAECT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['sexoxxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 11,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['generoxx'] = $this->getTemacomboCT([
            'temaxxxx' => 12,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['orientax'] = $this->getTemacomboCT([
            'temaxxxx' => 13,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['grupetni'] = $this->getTemacomboCT([
            'temaxxxx' => 20,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['grupindi'] = $this->getTemacomboCT([
            'temaxxxx' => 61,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['condicio'] = $this->getTemacomboCT([
            'temaxxxx' => 373,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['sectorxx'] = $this->getTemacomboCT([
            'temaxxxx' => 130,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['intraxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 211,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['atencion'] = $this->getTemacomboCT([
            'temaxxxx' => 404,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tipofor'] = $this->getTemacomboCT([
            'temaxxxx' => 405,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['discapac'] = $this->getTemacomboCT([
            'temaxxxx' => 24,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        
        $this->opciones['condixxx'] = $this->getTemacomboCT([
            'temaxxxx' => 57,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        


        $this->opciones['paisxxxx'] = SisPai::combo(true, false);
        $this->opciones['fosareas'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['departxx'] = SisDepartam::combo(2, false);
        //$this->opciones['departam'] = SisDepartam::combo($expedici->sis_departam->sis_pai_id, true);
        
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['servicios'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $upidxxxx = 0;
        $areaxxxx = 0;
        $sispaisx = 0;
        $deparexp = 0;
        $departam = 0;
        $deparexp = 0;
        $primresp = Auth::user()->s_documento;
        $this->opciones['certific']='none';
        $this->opciones['intraxxz']='none';
        $this->opciones['interxxz']='none';
        if ($dataxxxx['modeloxx'] != '') {
            if ($dataxxxx['modeloxx']->prm_etnia_id != 157) {
                $this->opciones['grupindi'] = Parametro::find(235)->Combo;
            }

            if($dataxxxx['modeloxx']->prm_condicion_id!=853){
                $this->opciones['certific']='block';
            }

            if($dataxxxx['modeloxx']->prm_tipoenti_id==2687){
                $this->opciones['intraxxz']='block';
                $this->opciones['interxxz']='none';
            }else{
                $this->opciones['intraxxz']='none';
                $this->opciones['interxxz']='block';
            }

            if($dataxxxx['modeloxx']->sis_nnaj_id!=null){
            $this->getTablasFamilia($dataxxxx['modeloxx']->sis_nnaj_id);
             }      
             
            $this->opciones['fechminx']=Carbon::today()->subYear(explode('-',$dataxxxx['modeloxx']->d_nacimiento)[0])->isoFormat('YY');
            
            $dataxxxx['modeloxx']->fecha = Carbon::parse($dataxxxx['modeloxx']->fecha)->toDateString();
            $sispaisx = $dataxxxx['modeloxx']->sis_pai_id;
            $dataxxxx['modeloxx']->d_nacimiento = Carbon::parse($dataxxxx['modeloxx']->d_nacimiento)->toDateString();
            $departam=$dataxxxx['modeloxx']->sis_departam_id ;
            $deparexp=$dataxxxx['modeloxx']->departamento_cond_id ;
            $dataxxxx['modeloxx']->sis_municipio_id = $dataxxxx['modeloxx']->municipio->id;
            $dataxxxx['modeloxx']->prm_tipoenti_id = $dataxxxx['modeloxx']->direcinsti->prm_tipoenti_id;
            $dataxxxx['modeloxx']->ent_servicio_id = $dataxxxx['modeloxx']->direcinsti->ent_servicio_id;
            $dataxxxx['modeloxx']->inter_id = $dataxxxx['modeloxx']->direcinsti->inter_id;
            $dataxxxx['modeloxx']->nombre_entidad = $dataxxxx['modeloxx']->direcinsti->nombre_entidad;
            $dataxxxx['modeloxx']->intra_id = $dataxxxx['modeloxx']->direcinsti->intra_id;
            $dataxxxx['modeloxx']->justificacion = $dataxxxx['modeloxx']->direcinsti->justificacion;
            $dataxxxx['modeloxx']->sis_entidad_id = $dataxxxx['modeloxx']->direcinsti->sis_entidad_id;
            $upidxxxx=$dataxxxx['modeloxx']->sis_entidad_id;
            $areaxxxx=$dataxxxx['modeloxx']->upi->i_prm_tdependen_id;
            $dataxxxx['modeloxx']->seguimiento_id = $dataxxxx['modeloxx']->direcinsti->seguimiento_id;
            $this->opciones['primresp'] = User::getRes(false, false,$dataxxxx['modeloxx']->user_doc);
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['padrexxx'] = $dataxxxx['modeloxx']->sis_nnaj_id;
            $this->pestania[1][4] = true;
            $this->pestania[1][2] = $this->opciones['parametr'];
            $this->pestania[2][4] = false;
            $this->pestania[2][2] = $this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevo', []], 2, 'NUEVO DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
            $this->opciones['sis_depens'] = $this->getSisDepenComboAreaCT([
                'cabecera' => true,
                'ajaxxxxx' => false,
                'campoxxx' => 'id',
                'orderxxx' => 'ASC',
                'inxxxxxx' => [$areaxxxx],
                'selected' =>['selected'],

            ]);
            
        }

        $this->opciones['municipi'] = SisMunicipio::combo($departam, false);
        $this->opciones['departam'] = SisDepartam::combo($sispaisx, false);
        $this->opciones['municexp'] = SisMunicipio::combo($deparexp, false);
        $this->opciones['primresp'] = User::getUsuario(false, false);
        $this->opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);


        $this->getTablasNnnaj();
        
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function municipioajax(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(SisMunicipio::combo($request->all()['padrexxx'], true));
        }
    }
    public function getDepaMuni(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = [];
            switch ($dataxxxx['tipoxxxx']) {
                case 'sis_departam_id':
                    $comboxxx = SisMunicipio::combo($dataxxxx['padrexxx'], true);
                    if ($dataxxxx['padrexxx'] == 1) {
                        $comboxxx = [['valuexxx' => 1, 'optionxx' => 'N/A']];
                    }
                    $respuest = ['comboxxx' => $comboxxx, 'campoxxx' => 'sis_municipio_id', 'limpiarx' => '#sis_municipio_id'];
                    break;
                case 'sis_pai_id':
                    $comboxxx = [['valuexxx' => 1, 'optionxx' => 'N/A']];
                    if ($dataxxxx['padrexxx'] == 2) {
                        $comboxxx = SisDepartam::combo($dataxxxx['padrexxx'], true);
                    }
                    $respuest = ['comboxxx' => $comboxxx, 'campoxxx' => 'sis_departam_id', 'limpiarx' => '#sis_departam_id'];
                    break;
            }
            return response()->json($respuest);
        }
    }
    public function getFechaNacimiento(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['fechaxxx' => '', 'edadxxxx' => ''];
            if (is_numeric($request->padrexxx)) {
                $fechaxxx = explode('-', date('Y-m-d'));
                $respuest = ['fechaxxx' => ($fechaxxx[0] - $request->padrexxx) . '-' . $fechaxxx[1] . '-' . $fechaxxx[2], 'edadxxxx' => $request->padrexxx];
            }
            return response()->json($respuest);
        }
    }
}

