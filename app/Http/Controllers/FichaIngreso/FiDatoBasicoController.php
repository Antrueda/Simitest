<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiDatosBasicoCrearRequest;
use App\Http\Requests\FichaIngreso\FiDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisPai;
use App\Models\sistema\SisUpz;
use App\Models\Tema;
use Carbon\Carbon;

class FiDatoBasicoController extends Controller
{
  private $bitacora;
  private $opciones;

  public function __construct()
  {
    $this->bitacora = new FiDatosBasico();
    $this->middleware(['permission:fidatobasico-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fidatobasico-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fidatobasico-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fidatobasico-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Datos Básicos',
      'rutaxxxx' => 'FichaIngreso',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'infoBasica',
      'carpetax' => 'datosbasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro',
      'nuevoxxx' => 'o Registro',

    ];


    $this->opciones['tipodocu'] = Tema::combo(3, true, false);
    $this->opciones['grupsang'] = Tema::combo(17, true, false);
    $this->opciones['factorrh'] = Tema::combo(18, true, false);
    $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
    $this->opciones['tipoblac'] = Tema::combo(119, true, false);
    $this->opciones['condicio'] = Tema::combo(23, true, false);
    $this->opciones['situmili'] = Tema::combo(23, true, false);
    $this->opciones['tiplibre'] = Tema::combo(33, true, false);
    $this->opciones['estacivi'] = Tema::combo(19, true, false);
    $this->opciones['grupetni'] = Tema::combo(20, true, false);

    $this->opciones['vestimen'] = Tema::combo(290, true, false);
    $this->opciones['generoxx'] = Tema::combo(12, true, false);
    $this->opciones['orientac'] = Tema::combo(13, true, false);
    $this->opciones['pais_idx'] = SisPai::combo(true, false);
    $this->opciones['localida'] = SisLocalidad::combo();
  }


  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    $usuariox = $this->bitacora->grabar($dataxxxx, $objetoxx);
    return redirect()
      ->route('fi.datosbasicos.editar', [$usuariox->sis_nnaj_id, $usuariox->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $fechaxxx = explode('-', date('Y-m-d'));

    if ($fechaxxx[1] < 12) {
      $fechaxxx[1] = (int) $fechaxxx[1] + 1;
    }
    $fechaxxx[2] = cal_days_in_month(CAL_GREGORIAN, $fechaxxx[1], $fechaxxx[0]) + $fechaxxx[2];
    $this->opciones['generoxx'] = Tema::combo(12, true, false);
    $this->opciones['orientac'] = Tema::combo(13, true, false);
    $this->opciones['estacivi'] = Tema::combo(19, true, false);

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    $this->opciones['departam'] = ['' => 'Seleccione'];
    $this->opciones['municipi'] = ['' => 'Seleccione'];
    $this->opciones['deparexp'] = ['' => 'Seleccione'];
    $this->opciones['municexp'] = ['' => 'Seleccione'];
    $this->opciones['mindatex'] = "-28y +0m +0d";
    $this->opciones['maxdatex'] = "-6y +0m +0d";

    $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
    $this->opciones['barrioxx'] = ['' => 'Seleccione'];
    $this->opciones['poblindi'] = ['' => 'Seleccione'];
    $this->opciones['neciayud'] = ['' => 'Seleccione'];
    $this->opciones['readfisi'] = '';
    // indica si se esta actualizando o viendo
    $this->opciones['aniosxxx'] = '';
    if ($nombobje != '') {
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';

     // $objetoxx->sis_localidad_id = $objetoxx->sis_barrio->sis_upz->sis_localidad_id;
     // $objetoxx->sis_upz_id = $objetoxx->sis_barrio->sis_upz_id;

            $barrioxx=$objetoxx->sis_upzbarri->sis_localupz;
            $objetoxx->sis_localidad_id=$barrioxx->sis_localidad_id;
            $objetoxx->sis_upz_id=$barrioxx->id;
            // ddd($valor->sis_localidad_id . ' ' . $valor->sis_upz_id);
            $this->opciones['upzxxxxx']  = SisUpz::combo($barrioxx->sis_localidad_id, false);
            $this->opciones['barrioxx'] = SisBarrio::combo($barrioxx->id, false);


      $this->opciones[$nombobje] = $objetoxx;

      $this->opciones['municipi'] = SisMunicipio::combo($objetoxx->sis_departamento_id, false);
      $this->opciones['departam'] = SisDepartamento::combo($objetoxx->sis_pai_id, false);


      $this->opciones['municexp'] = SisMunicipio::combo($objetoxx->sis_departamentoexp_id, false);
      $this->opciones['deparexp'] = SisDepartamento::combo($objetoxx->sis_paiexp_id, false);


     
      $fechaxxx = explode('-', $objetoxx->d_nacimiento);
      $this->opciones['aniosxxx'] = Carbon::createFromDate($fechaxxx[0], $fechaxxx[1], $fechaxxx[2])->age;

      if ($this->opciones['grupetni'] != 157) {
        $this->opciones['poblindi'] =  [1 => 'NO APLICA'];
      }

      if ($this->opciones['aniosxxx'] < 15) {
        $this->opciones['generoxx'] =  [1 => 'NO APLICA'];
        $this->opciones['orientac'] =  [1 => 'NO APLICA'];
      }

      if ($this->opciones['aniosxxx'] < 18 || $objetoxx->prm_sexo_id == 21) {
        $this->opciones['tiplibre'] = [1 => 'NO APLICA'];
        $this->opciones['situmili'] = [1 => 'NO APLICA'];
      }

      if ($objetoxx->prm_documento_id == 145) {
        $this->opciones['readfisi'] = 'readonly';
        $this->opciones['neciayud'] = Tema::combo(286, true, false);
      } else {
        $this->opciones['neciayud'] = [1 => 'NO APLICA'];
      }

      if ($objetoxx->prm_situacion_militar_id == 228) {
        $this->opciones['tiplibre'] = [1 => 'NO APLICA'];
      }
      // $this->opciones['poblindi'] = Tema::combo(61, true, false);
    }
    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];

    if ($this->opciones['accionxx'] == 'Crear') {
      $rutaxxxx = 'FichaIngreso.' . $this->opciones['carpetax'] . '.' . strtolower($this->opciones['accionxx']);
    } else {
      $rutaxxxx = 'FichaIngreso.pestanias';
    }
    return view($rutaxxxx, ['todoxxxx' => $this->opciones]);
  }

  public function create()
  {
    return $this->view(true, '', 'Crear');
  }
  public function store(FiDatosBasicoCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Datos básicos creados con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiDatosBasico $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show($nnajregi,  FiDatosBasico $db)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($db,  'modeloxx', 'Ver');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiDatosBasico $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($this->opciones['datobasi'],  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiDatosBasico $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiDatosBasicoUpdateRequest $request,  $db, $id)
  {

    return $this->grabar($request->all(), FiDatosBasico::usarioNnaj($db), 'Datos básicos actualizados con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiDatosBasico $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiDatosBasico $db)
  {
    //
  }
}
