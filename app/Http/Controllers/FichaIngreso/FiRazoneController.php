<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRazoneCrearRequest;
use App\Http\Requests\FichaIngreso\FiRazoneUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Tema;

class FiRazoneController extends Controller
{
  private $opciones;
  public function __construct()
  {
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
    $this->opciones['docanexa'] = Tema::combo(155,false,false);
    $this->opciones['estaingr'] = Tema::combo(303,true,false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
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
  public function create($datobasi)
  {
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
  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    return redirect()
      ->route('fi.razones.editar', [$dataxxxx['sis_nnaj_id'], FiRazone::transaccion($dataxxxx,  $objetoxx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiRazoneCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Razones para ingreso creados creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiRazone $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiRazone $objetoxx)
  {
    $this->opciones['razonesx'] = FiRazone::razones($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiRazoneUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiRazone::where('id',$id)->first(), 'Razones para ingreso actualizados con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiRazone  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiRazone $objetoxx)
  {
    //
  }
}
