<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRazoneCrearRequest;
use App\Http\Requests\FichaIngreso\FiRazoneUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Http\Request;

class FiRazoneController extends Controller {

  private $opciones;

  public function __construct() {
    $this->middleware(['permission:firazones-leer'], ['only' => ['show']]);
    $this->middleware(['permission:firazones-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:firazones-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:firazones-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
        'tituloxx' => 'Razones',
        'rutaxxxx' => 'FichaIngreso',
        'accionxx' => '',
        'volverax' => 'lista de NNAJ',
        'readonly' => '',
        'slotxxxx' => 'razones',
        'carpetax' => 'razones',
        'routxxxx' => 'fi.datobasico',
        'routinde' => 'fi',
        'routnuev' => 'fi.datobasico',
        'modeloxx' => '',
        'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['docanexa'] = Tema::combo(155, false, false);
    $this->opciones['estaingr'] = Tema::combo(303, true, false);
  }

  private function view($objetoxx, $nombobje, $accionxx) {
    $this->opciones['permisox'] = 'firazones';
    $this->opciones['routnuev'] = 'fi.archivos';
    $this->opciones['routxxxx'] = 'fi.archivos';

    $this->opciones['urlxxxxx'] = 'api/fi/razonarichivo';
    $this->opciones['parametr'] = [$this->opciones['nnajregi']];
    $this->opciones['cabecera'] = [
        ['td' => 'ID'],
        ['td' => 'DOCUMENTO'],
        ['td' => 'ESTADO'],
    ];

    $this->opciones['columnsx'] = [
        ['data' => 'btns', 'name' => 'btns'],
        ['data' => 'id', 'name' => 'fi_documentos_anexas.id'],
        ['data' => 'nombre', 'name' => 'parametros.nombre'],
        ['data' => 'sis_esta_id', 'name' => 'fi_documentos_anexas.sis_esta_id'],
    ];
    $this->opciones['dataxxxx'] = [
        ['campoxxx' => 'nnajxxxx', 'dataxxxx' => $this->opciones['nnajregi']],
        ['campoxxx' => 'botonesx', 'dataxxxx' => 'FichaIngreso/Razones/botones/botonesapi']
    ];
    $this->opciones['usuarios'] = User::combo(true, false);
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;

    $this->opciones['depedile'] = [];
    $this->opciones['deperesp'] = [];
    $this->opciones['cargodil'] = '';
    $this->opciones['cargores'] = '';
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones['parametr'][1]= $objetoxx->id;
      $this->opciones[$nombobje] = $objetoxx;
      $dilegenc = User::comboDependencia($objetoxx->userd_id, false, false);
      $responsa = User::comboDependencia($objetoxx->userr_id, false, false);
      $this->opciones['depedile'] = $dilegenc[0];
      $this->opciones['deperesp'] = $responsa[0];
      $this->opciones['cargodil'] = $dilegenc[1];
      $this->opciones['cargores'] = $responsa[1];
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
    }
    $this->opciones['docuanex'] = FiRazone::getDocumento($objetoxx);
    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
    return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create($datobasi) {
    $this->opciones['razonesx'] = FiRazone::razones($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiRazone::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
                      ->route('fi.razones.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }

  private function grabar($dataxxxx, $objetoxx, $infoxxxx, $nnajxxxx) {
    $dataxxxx = ['requestx' => $dataxxxx, 'nombarch' => 'archivo'];
    $archivos = new \App\Helpers\Archivos\Archivos();
    $archivox = $archivos->getRuta($dataxxxx);
    //ddd($dataxxxx);
    return redirect()
                    ->route('fi.razones.editar', [$nnajxxxx,
                        FiRazone::transaccion($dataxxxx['requestx']->all(), $objetoxx)->id])
                    ->with('info', $infoxxxx);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(FiRazoneCrearRequest $request, $nnajxxxx) {

    return $this->grabar($request, '', 'Razones para ingreso creados creada con exito', $nnajxxxx);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiRazone $objetoxx) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi, FiRazone $objetoxx) {
    $this->opciones['razonesx'] = FiRazone::razones($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx, 'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiRazoneUpdateRequest $request, $nnajxxxx, $id) {
    return $this->grabar($request, FiRazone::where('id', $id)->first(), 'Razones para ingreso actualizados con exito', $nnajxxxx);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiRazone $objetoxx) {
    //
  }

  public function cargos(Request $request, $nnajxxxx) {
    if ($request->ajax()) {
      $dataxxxx = $request->all();
      $respuest = ['comboxxx' => [], 'campoxxx' => '', 'cargoxxx' => '', 'campcarg' => ''];
      switch ($dataxxxx['campoxxx']) {
        case 'userd_id':
          $respuest['campcarg'] = '#s_cargo_diligencia';
          $respuest['campoxxx'] = '#sis_dependend_id';
          break;
        case 'userr_id':
          $respuest['campcarg'] = '#s_cargo_responsable';
          $respuest['campoxxx'] = '#sis_dependenr_id';
          break;
      }
      if ($dataxxxx['valuexxx'] != '') {
        $usuariox = User::comboDependencia($dataxxxx['valuexxx'], true, true);
        $respuest['comboxxx'] = $usuariox[0];
        $respuest['cargoxxx'] = $usuariox[1];
      }
      return response()->json($respuest);
    }
  }

}
