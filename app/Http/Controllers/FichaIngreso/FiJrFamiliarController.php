<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiJrFamiliarCrearRequest;
use App\Http\Requests\FichaIngreso\FiJrFamiliarEditarRequest;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\FichaIngreso\FiJrFamiliar;
use App\Models\fichaIngreso\FiJusticiaRestaurativa;
use App\Models\Tema;
use Illuminate\Support\Carbon;

class FiJrFamiliarController extends Controller
{
  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:fijrfamiliar-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fijrfamiliar-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fijrfamiliar-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fijrfamiliar-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Composición familiar',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'permisox' => 'fijrfamiliar',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'justicia',
      'carpetax' => 'jrfamiliar',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro',

    ];
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['vigentex'] = Tema::combo(23, true, false);
    $this->opciones['devolver'] = [$this->opciones['nnajregi'],FiJusticiaRestaurativa::where('sis_nnaj_id',$this->opciones['nnajregi'])->first()->id];
    $this->opciones['compfami'] = FiComposicionFami::combo($this->opciones['datobasi'], true, false);
    $this->opciones['motivoxx'] = Tema::combo(66, true, false);
    $this->opciones['tiempoxx'] = Tema::combo(44, true, false);
     $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    $this->opciones['aniosxxx'] = '';
    // indica si se esta actualizando o viendo
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
    }

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
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.jrfamiliar.editar', [$dataxxxx['sis_nnaj_id'], FiJrFamiliar::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiJrFamiliarCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Composicion familiar creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiComposicionFami  $residencia
   * @return \Illuminate\Http\Response
   */
  public function show(FiComposicionFami $reisidencia)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiJrFamiliar $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiJrFamiliarEditarRequest $request,  $db,  $id)
  {
    return $this->grabar($request->all(), FiComposicionFami::where('id', $id)->first(), 'Composicion familiar actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiComposicionFami $objetoxx)
  {
    //
  }
}
