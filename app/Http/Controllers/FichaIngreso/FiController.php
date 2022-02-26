<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Parametro;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartam;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisUpz;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Fi\FiTrait;
use App\Traits\Fi\Datobasi\DBControllerTrait;
use App\Traits\Fi\Datobasi\DBCrudTrait;
use App\Traits\Fi\FiDataTablesTrait;
use App\Traits\Fi\Datobasi\DBVistasTrait;
use App\Traits\Fi\Datobasi\EspejoTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Traits\Interfaz\Antisimi\CedulasBienTrait;
use App\Traits\Interfaz\ComposicionFamiliarTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Interfaz\Nuevsimi\BarrioTrait;
use App\Traits\Puede\PuedeTrait;

class FiController extends Controller
{
    use FiTrait;
    use DBVistasTrait; // parametrización de las vistas de datos basicos
    use DBControllerTrait; // todos los metodos del controlador
    use FiDataTablesTrait;
    use DBCrudTrait; // realizar el guardado de datos basicos
    use InterfazFiTrait;
    use PuedeTrait;
    use ComposicionFamiliarTrait;
    use CedulasBienTrait;
    use BarrioTrait;
    use EspejoTrait;
    use ManageTimeTrait;
    public function __construct()
    {
        
        $this->opciones['botoform']=[];
        $this->getConfigVistas();
        $this->middleware($this->getMware());
    }

    public function indexComponetefami()
    {
        $this->opciones['slotxxxx'] = 'compnnaj';
        $this->getCompnnajFDT([
            'vercrear' => false,
            'titunuev' => "NUEVO {$this->opciones['titucont']}",
            'titulist' => "LISTA DE COMPONENTES FAMILIARES PARA PASAR A {$this->opciones['titucont']}",
            'permisox' => $this->opciones['permisox'] . '-crear',
        ]);
        $this->opciones['tablasxx'][0]['forminde'] = '';
        $respuest = $this->indexOGT();
        
        return $respuest;
    }

    public function editComposicionFami(FiDatosBasico $objetoxx)
    {
        $this->opciones['tabsxxxx'] = 'tannajas';
        $this->combos();
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => 'GUARDAR', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->viewComposicionFami(['modeloxx' => $objetoxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $objetoxx]);
    }

    public function updateComposicionFami(FiDatosBasicoUpdateRequest $request,  FiDatosBasico $objetoxx)
    {
        $dataxxxx = $request->all();
        // $dataxxxx['pasaupis'] = false;
        $dataxxxx['prm_escomfam_id'] = 227;
        return $this->setDatosBasicos($dataxxxx, $objetoxx, 'Datos básicos actualizados con éxito');
    }

    private function viewComposicionFami($dataxxxx)
    {

        $this->getArchivos($dataxxxx);
        $this->getGenerales();
        $localida = 0;
        $upzxxxxx = $localida;
        $paisxxxx = $localida;
        $paisexpe = $localida;
        $departam = $localida;
        $depaexpe = $localida;
        $this->opciones['servicio'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        if ($dataxxxx['modeloxx'] != '') {
            $upixxxxx = $dataxxxx['modeloxx']
                ->sis_nnaj
                ->nnaj_upis
                ->where('prm_principa_id', 227)
                ->first(); 
            $dataxxxx['modeloxx']->sis_depen_id = 0;
            if ($upixxxxx != null) {
                $dataxxxx['modeloxx']->sis_depen_id = $upixxxxx->sis_depen_id;
                $servicio = $dataxxxx['modeloxx']
                    ->sis_nnaj
                    ->nnaj_upis->where('prm_principa_id', 227)
                    ->first()->nnaj_deses
                    ->where('prm_principa_id', 227)
                    ->first();
                if ($servicio != null) {
                    $dataxxxx['modeloxx']->sis_servicio_id = $servicio->sis_servicio_id;
                }
            }
            switch ($dataxxxx['padrexxx']->prm_tipoblaci_id) {
                case 650:
                    $this->opciones['estrateg'] = Tema::combo(355, false, false);
                    break;
                case 651:
                    $this->opciones['estrateg'] = Tema::combo(354, true, false);
                    break;
            }
            $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
            $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['perfilxx'] = 'conperfi';
            $this->opciones['usuariox'] =  $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            // /** Nacimiento */
            $dataxxxx = $this->getNacimi($dataxxxx);
            $paisxxxx = $dataxxxx['modeloxx']->sis_pai_id;
            $departam = $dataxxxx['modeloxx']->sis_departam_id;
            /** documento de identidad */
            $dataxxxx = $this->getDocumen($dataxxxx);
            $paisexpe = $dataxxxx['modeloxx']->sis_paiexp_id;
            $depaexpe = $dataxxxx['modeloxx']->sis_departamexp_id;

            /** situacion militar */
            if ($dataxxxx['modeloxx']->nnaj_sit_mil != null) {
                $dataxxxx['modeloxx']->prm_situacion_militar_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_situacion_militar_id;
                $dataxxxx['modeloxx']->prm_clase_libreta_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_clase_libreta_id;
            }
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
            if ($this->opciones['aniosxxx'] < 15) {
                $this->opciones['generoxx'] =  Parametro::find(235)->Combo;
                $this->opciones['orientac'] =  Parametro::find(235)->Combo;
            }
            if ($this->opciones['aniosxxx'] < 18 || $dataxxxx['modeloxx']->prm_sexo_id == 21) {
                $this->opciones['tiplibre'] = Parametro::find(235)->Combo;
                $this->opciones['situmili'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_tipodocu_id == 145) {
                $this->opciones['readfisi'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->prm_doc_fisico_id == 228) {

                $this->opciones['neciayud'] = Tema::combo(286, true, false);
            } else {

                $this->opciones['neciayud'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_situacion_militar_id != 227) {
                $this->opciones['tiplibre'] = Parametro::find(235)->Combo;
            }
        }
        $this->opciones['dependen'] = User::getUpiUsuario(true, false);
        $this->opciones['upzxxxxx'] = SisUpz::combo($localida, false);
        $this->opciones['barrioxx'] = SisBarrio::combo($upzxxxxx, false);
        $this->opciones['municipi'] = SisMunicipio::combo($departam, false);
        $this->opciones['departam'] = SisDepartam::combo($paisxxxx, false);
        $this->opciones['municexp'] = SisMunicipio::combo($depaexpe, false);
        $this->opciones['deparexp'] = SisDepartam::combo($paisexpe, false);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
