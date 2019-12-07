<?php

namespace App\Http\Controllers\FichaObservacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosDatosBasicoCrearRequest;
use App\Http\Requests\FichaObservacion\FosDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\Indicadores\Area;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\sistema\SisDependencia;
use App\Models\Tema;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class FosDatoBasicoController extends Controller
{
  private $bitacora;
  private $opciones;

  public function __construct()
  {
    $this->bitacora = new FosDatosBasico();
    $this->middleware(['permission:fosfichaobservacion-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fosfichaobservacion-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fosfichaobservacion-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fosfichaobservacion-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Ficha de Observación y Seguimiento',
      'rutaxxxx' => 'fos.fichaobservacion',
      'routxxxx' => 'fos.fichaobservacion',
      'routinde' => 'fos',
      'routnuev' => 'fos.fichaobservacion',
      'accionxx' => '',
      'volverax' => 'Fichas de Observación',
      'readonly' => '',
      'carpetax' => 'FichaObservacion',
      'rutacarp' => 'FichaObservacion.',
      'modeloxx' => '',
      'vercrear' => '',
      'nuevoxxx' => 'o Registro',
      'urlxxxxx' => 'api/fos/nnajs',
    ];
    
    $this->opciones['dispform'] = "none";
    $this->opciones['disptabx'] = "block";
    $this->opciones['permisox'] = 'fosfichaobservacion';
    $this->opciones['areacont'] = Tema::combo(211, true, false);
    $this->opciones['tipatenc'] = Tema::combo(213, true, false);
    $this->opciones['areajust'] = Tema::combo(212, true, false);
    $this->opciones['arjustpr'] = Tema::combo(212, false, false);
    $this->opciones['subemoci'] = Tema::combo(162, true, false);
    $this->opciones['subfamil'] = Tema::combo(167, true, false);
    $this->opciones['subsexua'] = Tema::combo(163, true, false);
    $this->opciones['subcompo'] = Tema::combo(164, true, false);
    $this->opciones['subsocia'] = Tema::combo(166, true, false);
    $this->opciones['subacade'] = Tema::combo(165, true, false);
    $this->opciones['nivavanc'] = Tema::combo(52, true, false);
    $this->opciones['dependen'] = SisDependencia::combo(true, false);
    $this->opciones['temaxxxx'] = AgTema::comb(true, false);
    $this->opciones['tallerxx'] = AgTaller::comb(true, false);
  }
  public function index(Request $request)
  {
    $this->opciones['cabecera'] = [
      ['td' => 'Id'],
      ['td' => 'PRIMER NOMBRE'],
      ['td' => 'SEGUNDO NOMBRE'],
      ['td' => 'DOCUMENTO'],
      ['td' => 'ESTADO'],
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns','name' => 'btns'],
      ['data' => 's_primer_nombre','name' => 's_primer_nombre'],
      ['data' => 's_segundo_nombre','name' => 's_segundo_nombre'],
      ['data' => 's_primer_apellido','name' => 's_primer_apellido'],
      ['data' => 's_segundo_apellido','name' => 's_segundo_apellido'],
      ['data' => 's_apodo','name' => 's_apodo'],

    ];
    $this->opciones['parametr'] = [];
    $this->opciones['permisox'] = 'fosfichaobservacion';
    return view($this->opciones['rutacarp'].'index', ['todoxxxx' => $this->opciones]);
  }

  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fos.fichaobservacion.editar', [$dataxxxx['sis_nnaj_id'],FosDatosBasico::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }

  public function store(FosDatosBasicoCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Ficha de Observación creada con exito');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['areasxxx'] = Area::combo_tema('', true, false);
    $this->opciones['compfami'] = FiComposicionFami::combo($this->opciones['datobasi'], true, false);
    $fechaxxx = explode('-', date('Y-m-d'));
    $fechaxxx[1] = $fechaxxx[1] + 1;
    $fechaxxx[2] = cal_days_in_month(CAL_GREGORIAN, $fechaxxx[1], $fechaxxx[0]) + $fechaxxx[2];


    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    $this->opciones['departam'] = ['' => 'Seleccione'];
    $this->opciones['municipi'] = ['' => 'Seleccione'];
    $this->opciones['mindatex'] = "-28y +0m +0d";
    $this->opciones['maxdatex'] = "-6y +0m +0d";

    $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
    $this->opciones['barrioxx'] = ['' => 'Seleccione'];
    $this->opciones['poblindi'] = ['' => 'Seleccione'];
    $this->opciones['neciayud'] = ['' => 'Seleccione'];
    $this->opciones['subareas']['subareax'] = ['' => 'Seleccione'];

    // indica si se esta actualizando o viendo
    $this->opciones['aniosxxx'] = '';
    if ($nombobje != '') {
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['subareas'] = $this->casos($objetoxx->i_prm_area_ajuste_id,true,false);
    }
    
    // Se arma el titulo de acuerdo al array opciones
    // $this->opciones['areajusx'] = FosDatosBasico::getAreajuste($objetoxx);
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
    
    $rutaxxxx = 'FichaObservacion.' . strtolower($this->opciones['accionxx']);
   
    return view($rutaxxxx, ['todoxxxx' => $this->opciones]);
  }

  public function create($nnajregi)
  {
    $this->opciones['disptabx'] = "none";
    $this->opciones['dispform'] = "block";
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id',$nnajregi)->first(); //prueba
    return $this->view('', '', 'crear');
  }
  public function lista($nnajregi)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id',$nnajregi)->first();
    return $this->view('', '', 'crear');
  }

   /**
   * Display the specified resource.
   *
   * @param  \App\Models\FosDatosBasico $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show($nnajregi, FosDatosBasico $db)
  {
    $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id',$nnajregi)->first(); //prueba
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FosDatosBasico $fos
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FosDatosBasico $fichaobservacion)
  {
    $this->opciones['disptabx'] = "none";
    $this->opciones['dispform'] = "block";
    $this->opciones['nnajregi'] = $nnajregi;
    // $this->opciones['datobasi'] = FosDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    $this->opciones['datobasi'] = FiDatosBasico::where('sis_nnaj_id',$nnajregi)->first(); //prueba
    return $this->view($fichaobservacion, 'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FosDatosBasico $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FosDatosBasicoUpdateRequest $request,  $db, $id)
  {

    return $this->grabar($request->all(), fosDatosBasico::usarioNnaj($db), 'Ficha de observación actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FosDatosBasico $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FosDatosBasico $db)
  {
    //
  }

  private function casos($areaxxxx, $cabecera, $ajaxxxxx)
  {
    $respuest = [];
    switch ($areaxxxx) {
      case 448: //Emoción
        $respuest = [
          'subareax' => Tema::combo(162,$cabecera,$ajaxxxxx),
        ];
      break;
      case 282: //Familiar
        $respuest = [
          'subareax' => Tema::combo(167,$cabecera,$ajaxxxxx),
        ];
      break;
      case 449: //Social
        $respuest = [
          'subareax' => Tema::combo(166,$cabecera,$ajaxxxxx),
        ];
      break;
      case 1058: //Comportamental
        $respuest = [
          'subareax' => Tema::combo(164,$cabecera,$ajaxxxxx),
        ];
      break;
      case 525: //Sexual
        $respuest = [
          'subareax' => Tema::combo(163,$cabecera,$ajaxxxxx),
        ];
      break;
      case 1059: //Académica
        $respuest = [
          'subareax' => Tema::combo(165,$cabecera,$ajaxxxxx),
        ];
      break;

    }
    return $respuest;
  }
  public function subareasajax(\Illuminate\Http\Request $request)
  {
    if ($request->ajax()) {
      return response()->json($this->casos($request->all()['areaxxxx'],false,true));
    }
  }
}
