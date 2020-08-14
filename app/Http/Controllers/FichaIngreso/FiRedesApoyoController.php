<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRedesApoyoCrearRequest;
use App\Http\Requests\FichaIngreso\FiRedesApoyoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRedesApoyo;
use App\Models\Sistema\SisEntidad;
use App\Models\Tema;

class FiRedesApoyoController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:firedapoyo-leer'], ['only' => ['show']]);
    $this->middleware(['permission:firedapoyo-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:firedapoyo-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:firedapoyo-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Redes de Apoyo',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'redapoyo',
      'carpetax' => 'redapoyo',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['sexoxxxx'] = Tema::combo(84, true, false);
    $this->opciones['endidadx'] = SisEntidad::combo(true, false);
  }
  public function index($nnajregi)
  {
    $this->opciones['esindexx']='';
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
    $vestuari = FiRedesApoyo::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.redapoyo.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.redapoyo.editar', [$dataxxxx['sis_nnaj_id'], FiRedesApoyo::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiRedesApoyoCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Red Apoyo creado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiRedesApoyo  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiRedesApoyo $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiRedesApoyo  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiRedesApoyo $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiRedesApoyo  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiRedesApoyoUpdateRequest $request, FiRedesApoyo $objetoxx)
  {
    return $this->grabar($request->all(), $objetoxx, 'Red Apoyo actualizado con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiRedesApoyo  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiRedesApoyo $objetoxx)
  {
    //
  }
}
