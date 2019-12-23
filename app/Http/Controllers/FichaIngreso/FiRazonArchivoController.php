<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRazoneArchivoCrearRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Tema;
use App\Models\User;

class FiRazonArchivoController extends Controller {

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
        'routxxxx' => 'fi.archivos',
        'routinde' => 'fi',
        'routnuev' => 'fi.archivos',
        'modeloxx' => '',
        'permisox' => 'firazones',
        'nuevoxxx' => 'o Registro',
        'archivox' => ''
    ];
  }

  private function view($objetoxx, $nombobje, $accionxx) {
    $this->opciones['cabecera'] = [
        ['td' => 'ID'],
        ['td' => 'DOCUMENTO'],
        ['td' => 'ESTADO'],
    ];

    $this->opciones['columnsx'] = [
        ['data' => 'btns', 'name' => 'btns'],
        ['data' => 'id', 'name' => 'fi_documentos_anexas.id'],
        ['data' => 'nombre', 'name' => 'parametros.nombre'],
        ['data' => 'activo', 'name' => 'fi_documentos_anexas.activo'],
    ];

    $this->opciones['permisox'] = 'firazones';
    $this->opciones['urlxxxxx'] = 'api/fi/razonarichivo';
    $this->opciones['parametr'] = [$this->opciones['nnajregi'], $this->opciones['razonesx']];

    $this->opciones['dataxxxx'] = [
        ['campoxxx' => 'nnajxxxx', 'dataxxxx' => $this->opciones['nnajregi']],
        ['campoxxx' => 'botonesx', 'dataxxxx' => 'FichaIngreso/Razones/botones/botonesapi']
    ];

    $this->opciones['usuarios'] = User::combo(true, false);
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
    $dataxxxx = ['razonesx' => $this->opciones['razonesx'], 'selected' => ''];
    if ($nombobje != '') {
      $dataxxxx['selected'] = $objetoxx->i_prm_documento_id;
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
    }
    $this->opciones['docanexa'] = Tema::combo(155, false, false, $dataxxxx);
    $this->opciones['estaingr'] = Tema::combo(303, true, false);
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
  public function create($datobasi, $razonesx) {
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $this->opciones['razonesx'] = $razonesx;
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }

  private function grabar($dataxxxx, $objetoxx, $infoxxxx, $nnajxxxx, $razonesx) {
    $dataxxxx = ['requestx' => $dataxxxx, 'nombarch' => 's_doc_adjunto'];
    $archivos = new \App\Helpers\Archivos\Archivos();
    $dataxxxx['requestx']->request->add(['s_ruta' => $archivos->getRuta($dataxxxx)]);
    $dataxxxx['requestx']->request->add(['fi_razone_id' => $razonesx]);
    return redirect()
                    ->route('fi.archivos.editar', [$nnajxxxx, $razonesx,
                        \App\Models\fichaIngreso\FiDocumentosAnexa::transaccion($dataxxxx['requestx']->all(), $objetoxx)->id])
                    ->with('info', $infoxxxx);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(FiRazoneArchivoCrearRequest $request, $nnajxxxx, $razonesx) {
    return $this->grabar($request, '', 'Razones para ingreso creados creada con exito', $nnajxxxx, $razonesx);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show($nnajregi, $razonesx, \App\Models\fichaIngreso\FiDocumentosAnexa $objetoxx) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi, $razonesx, \App\Models\fichaIngreso\FiDocumentosAnexa $objetoxx) {
    $this->opciones['razonesx'] = FiRazone::razones($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['razonesx'] = $razonesx;
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
  public function update(FiRazoneArchivoCrearRequest $request, $nnajxxxx, $razonesx, $id) {
    return $this->grabar($request, \App\Models\fichaIngreso\FiDocumentosAnexa::where('id', $id)->first(), 'Razones para ingreso actualizados con exito', $nnajxxxx, $razonesx);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy($nnajregi, $razonesx, \App\Models\fichaIngreso\FiDocumentosAnexa $objetoxx) {
    //
  }

}
