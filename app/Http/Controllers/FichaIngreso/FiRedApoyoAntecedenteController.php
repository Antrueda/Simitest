<?php

namespace App\Http\Controllers\FichaIngreso;


use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRedApoyoAntecedenteCrearRequest;
use App\Http\Requests\FichaIngreso\FiRedApoyoAntecedenteUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\sistema\SisEntidad;
use App\Models\Tema;

class FiRedApoyoAntecedenteController extends Controller
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
      'carpetax' => 'redantecedentes',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Datos Básico',
      'tablname' => 'tbantecedentes',
      'urlxxxxx' => 'api/fi/firedapoyoantecedente'
    ];
    $this->opciones['cabecera'] = [ 
      ['td' => 'Id'],
      ['td' => 'ENTIDAD'],
      ['td' => 'SERVICIOS O BENEFICIOS RECIBIDOS'],
      ['td' => 'TIEMPO'],
      ['td' =>'TIPO TIEMPO'],
      ['td' => 'AÑO'],
      ['td' => 'ESTADO'], 
      
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns','name' => 'btns'],
      ['data' => 'id','name' => 'fi_red_apoyo_antecedentes.id'],
      ['data' => 'nombre','name' => 'sis_entidads.nombre'],
      ['data' => 's_servicio','name' => 's_servicio'],
      ['data' => 'i_tiempo','name' => 'fi_red_apoyo_antecedentes.i_tiempo'],
      ['data' => 'tipotiem','name' => 'tiempo.nombre as tipotiem'],
      ['data' => 'anioxxxx','name' => 'anio.nombre as anioxxxx'],
      ['data' => 'sis_esta_id','name' => 'fi_red_apoyo_antecedentes.sis_esta_id'],
    ];
    $this->opciones['tipotiem'] = Tema::combo(4, true, false);
    $this->opciones['anioserv'] = Tema::combo(84, true, false);
    $this->opciones['endidadx'] = SisEntidad::combo(true, false);
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
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.redantecedentes.editar', [$dataxxxx['sis_nnaj_id'], FiRedApoyoAntecedente::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiRedApoyoAntecedenteCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Red Apoyo antecedentes creado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiRedApoyoAntecedente  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiRedApoyoAntecedente $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiRedApoyoAntecedente  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiRedApoyoAntecedente $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiRedApoyoAntecedente  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiRedApoyoAntecedenteUpdateRequest $request,  $db, $id)
  {
    return $this->grabar($request->all(), FiRedApoyoAntecedente::where('id', $id)->first(), 'Red Apoyo antecedentes actualizado con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiRedApoyoAntecedente  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiRedApoyoAntecedente $objetoxx)
  {
    //
  }
}
