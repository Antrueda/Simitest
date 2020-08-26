<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaCrearRequest;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSustanciaConsumida;

use App\Models\Tema;

class FiSustanciaConsumidaController extends Controller
{
  private $opciones;
  public function __construct()
  {

    $this->opciones = [
      'tituloxx' => 'Sustancia Consumida',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'consumo',
      'carpetax' => 'sustanciaconsume',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Datos Básico',
      'permisox' => 'fisustanciaconsume',
      'urlxxxxx' => 'api/fi/fisustanciaconsumida',
    ];



    $this->middleware(['permission:'
        . $this->opciones['permisox'] . '-leer|'
        . $this->opciones['permisox'] . '-crear|'
        . $this->opciones['permisox'] . '-editar|'
        . $this->opciones['permisox'] . '-borrar']);

    $this->opciones['sustanci'] = Tema::combo(53,true,false);
    $this->opciones['condicio'] = Tema::combo(23,true, false);

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
    // $this->opciones['compfami'] = FiComposicionFami::combo($this->opciones['datobasi'], true, false);
    $this->opciones['servicio'] = ['' => 'seleccione'];
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

    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.sustanciaconsume.editar', [$dataxxxx['sis_nnaj_id'], FiSustanciaConsumida::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiSustanciaConsumidaCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Sustancia creada con exito');
  }



  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiSustanciaConsumida $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi, FiSustanciaConsumida $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \App\Models\FiSustanciaConsumida $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiSustanciaConsumidaUpdateRequest $request,  $db, $id)
  {
    return $this->grabar($request->all(), FiSustanciaConsumida::where('id', $id)->first(), 'Sustancia actualizada con exito');
  }
}
