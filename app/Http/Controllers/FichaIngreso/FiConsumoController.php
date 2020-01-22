<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiConsumoSpaCrearRequest;
use App\Http\Requests\FichaIngreso\FiConsumoSpaUpdateRequest;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSustanciaConsumida;
use App\Models\Tema;

class FiConsumoController extends Controller
{

  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:ficonsumo-leer'], ['only' => ['show']]);
    $this->middleware(['permission:ficonsumo-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:ficonsumo-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:ficonsumo-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Consumo SPA',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'consumo',
      'carpetax' => 'consumo',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro',
      'permisox' => 'fisustanciaconsume',
      'urlxxxxx' => 'api/fi/fisustanciaconsumida',
    ];
    $this->opciones['condicio'] = Tema::combo(23,true,false); 
    $this->opciones['tablname'] ='sustanci';

    $this->opciones['cabecera'] = [
      ['td' => 'SUSTANCIA'],
      ['td' => 'EDAD USO PRIMERA VEZ'],
      ['td' => 'HA CONSUMIDO ÚLTIMO MES'],
      ['td' => 'ACTIVO'],
    ];
    $this->opciones['columnsx'] = [ 
      ['data' => 'btns','name'=>'btns'],
      ['data' => 'sustancia','name'=>'parametros.nombre as sustancia'],
      ['data' => 'i_edad_uso','name'=>'fi_sustancia_consumidas.i_edad_uso'],
      ['data' => 'consume','name'=>'parametros.nombre as consume'],
      ['data' => 'sis_esta_id','name'=>'fi_sustancia_consumidas.sis_esta_id'],
    ];
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones['puedexxx'] = '';
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
    $this->opciones['consuspa'] = FiConsumoSpa::consumo($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiConsumoSpa::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.consumo.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }

  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    FiConsumoSpa::transaccion($dataxxxx, $objectx);
    return redirect()
    ->route('fi.consumo.editar', [$dataxxxx['sis_nnaj_id'], FiConsumoSpa::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiConsumoSpaCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Consumo SPA creado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiConsumoSpa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiConsumoSpa $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiConsumoSpa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiConsumoSpa $objetoxx)
  {
    $this->opciones['consuspa'] = FiConsumoSpa::consumo($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiConsumoSpa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiConsumoSpaUpdateRequest $request,  $db, $id)
  {
    return $this->grabar($request->all(), FiConsumoSpa::where('id',$id)->first(), 'Consumo SPA actualizado con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiConsumoSpa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiConsumoSpa $objetoxx)
  {
    //
  }
}
