<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRedApoyoActualCrearRequest;
use App\Http\Requests\FichaIngreso\FiRedApoyoActualUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\Tema;

class FiRedApoyoActualController extends Controller
{
  private $opciones;
  public function __construct()
  {

    $this->opciones = [
      'tituloxx' => 'Redes de Apoyo',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'redapoyo',
      'carpetax' => 'redactual',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Datos Básico'
    ];


    $this->middleware(['permission:'
        . $this->opciones['permisox'] . '-leer|'
        . $this->opciones['permisox'] . '-crear|'
        . $this->opciones['permisox'] . '-editar|'
        . $this->opciones['permisox'] . '-borrar']);

    $this->opciones['cabecera'] = [
      ['td' => 'Id'],
      ['td' => 'TIPO DE RED'],
      ['td' => 'NOMBRE PERSONA/INSTITUCIÓN'],
      ['td' => 'SERVICIOS O BENEFICIOS'],
      ['td' => 'TELÉFONOS'],
      ['td' => 'DIRECCIÓN'],
      ['td' => 'ESTADO'],
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns', 'name'        => 'btns'],
      ['data' => 'id', 'name'          => 'fi_red_apoyo_actuals.id'],
      ['data' => 'redxxxxx', 'name'      => 'red.nombre'],
      ['data' => 's_nombre_persona', 'name'      => 's_nombre_persona'],
      ['data' => 's_servicio', 'name'  => 's_servicio'],
      ['data' => 's_telefono', 'name'  => 's_telefono'],
      ['data' => 's_direccion', 'name'  => 's_direccion'],
      ['data' => 'sis_esta_id', 'name'      => 'fi_red_apoyo_actuals.sis_esta_id'],
    ];
    $this->opciones['tablname'] = 'tbactuales';
    $this->opciones['urlxxxxx'] = 'api/fi/firedapoyoactual';
    $this->opciones['tipotiem'] = Tema::combo(4, true, false);
    $this->opciones['tiporedx'] = Tema::combo(88, true, false);
    $this->opciones['anioserv'] = Tema::combo(84, true, false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
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
    return $this->view(true, '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.redactual.editar', [$dataxxxx['sis_nnaj_id'], FiRedApoyoActual::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiRedApoyoActualCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Red actual creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiRedApoyoActual  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiRedApoyoActual $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiRedApoyoActual  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiRedApoyoActual $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiRedApoyoActual  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiRedApoyoActualUpdateRequest $request,  $db, $id)
  {
    return $this->grabar($request->all(), FiRedApoyoActual::where('id', $id)->first(), 'Red actual actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiRedApoyoActual  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiRedApoyoActual $objetoxx)
  {
    //
  }
}
