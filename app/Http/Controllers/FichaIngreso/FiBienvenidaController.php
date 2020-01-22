<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiBienvenidaCrearRequest;
use App\Http\Requests\FichaIngreso\FiBienvenidaUpdateRequest;
use App\Models\sistema\SisDependencia;
use App\Models\fichaIngreso\FiBienvenida;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Tema;

class FiBienvenidaController extends Controller
{

  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:fibienvenida-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fibienvenida-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fibienvenida-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fibienvenida-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Bienvenida',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'bienvenida',
      'carpetax' => 'bienvenida',
      'modeloxx' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['condicio'] = Tema::combo(23,true,false);
    $this->opciones['dependen'] = SisDependencia::combo(true,false);
    $this->opciones['servicio'] = Tema::combo(65,true,false);
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
    $this->opciones['bienveni'] = FiBienvenida::bienvenida($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiBienvenida::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.bienvenida.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }

  
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.bienvenida.editar', [$dataxxxx['sis_nnaj_id'],FiBienvenida::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiBienvenidaCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Bienvenida creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiBienvenida  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiBienvenida $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiBienvenida  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiBienvenida $objetoxx)
  {
    $this->opciones['bienveni'] = FiBienvenida::bienvenida($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiBienvenida  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiBienvenidaUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiBienvenida::where('id',$id)->first(), 'Bienvenida actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiBienvenida  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiBienvenida $objetoxx)
  {
    //
  }
}
