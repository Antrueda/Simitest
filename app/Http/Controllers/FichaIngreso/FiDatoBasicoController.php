<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiDatosBasicoCrearRequest;
use App\Http\Requests\FichaIngreso\FiDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FiDatoBasicoController extends Controller
{
  private $bitacora;
  private $opciones;

  public function __construct()
  {
    $this->opciones['vocalesx']=['Á', 'É', 'Í', 'Ó', 'Ú'];
    $this->opciones['permisox']='fidatobasico';
    $this->bitacora = new FiDatosBasico();
    $this->middleware(['permission:'
    . $this->opciones['permisox'] . '-leer|'
    . $this->opciones['permisox'] . '-crear|'
    . $this->opciones['permisox'] . '-editar|'
    . $this->opciones['permisox'] . '-borrar']);
    $this->opciones = [
      'rutacarp ' => 'FichaIngreso.',
      'tituloxx' => "INFORMACI{$this->opciones['vocalesx'][3]}N",
      'carpetax' => 'Vsi',


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

  
}
