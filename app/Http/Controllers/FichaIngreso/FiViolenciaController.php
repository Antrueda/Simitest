<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiViolenciaCrearRequest;
use App\Http\Requests\FichaIngreso\FiViolenciaUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisMunicipio;
use App\Models\Tema;

class FiViolenciaController extends Controller
{

  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:fiviolencia-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fiviolencia-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fiviolencia-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fiviolencia-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Violencia',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'violencia',
      'carpetax' => 'violencia',
      'modeloxx' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['condicio'] = Tema::combo(23,true,false);
    $this->opciones['condespe'] = Tema::combo(57,true,false);
    $this->opciones['sexoxxxx'] = Tema::combo(11,true,false);
    $this->opciones['condiesp'] = Tema::combo(23,true,false);

    $this->opciones['conditab'] = Tema::comboDesc(23,false,false);
 
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;

    $this->opciones['departam'] = ['' => 'Seleccione'];
    $this->opciones['municipi'] = ['' => 'Seleccione'];
    $this->opciones['deparexp'] = ['' => 'Seleccione'];
    $this->opciones['municexp'] = ['' => 'Seleccione'];
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {

      $this->opciones['municipi'] = SisMunicipio::combo($objetoxx->i_prm_depto_condicion_id, false);
      $this->opciones['departam'] = SisDepartamento::combo(2, false);

      $this->opciones['municexp'] = SisMunicipio::combo($objetoxx->i_prm_depto_certifica_id, false);
      $this->opciones['deparexp'] = SisDepartamento::combo(2, false);

      if ($objetoxx->i_prm_condicion_presenta_id == 853 || $objetoxx->i_prm_condicion_presenta_id == 455) {
        $this->opciones['condiesp'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->i_prm_presenta_violencia_id != 227) {
        $this->opciones['conditab'] = [1 => 'NO APLICA'];
      }
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
    $this->opciones['violenci'] = FiViolencia::violencia($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiViolencia::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.violencia.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }
  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    return redirect()
      ->route('fi.violencia.editar', [$dataxxxx['sis_nnaj_id'], FiViolencia::transaccion($dataxxxx, $objetoxx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiViolenciaCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Violencia y condición especial creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiViolencia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiViolencia $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiViolencia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiViolencia $objetoxx)
  {
    $this->opciones['violenci'] = FiViolencia::violencia($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiViolencia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiViolenciaUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiViolencia::where('id',$id)->first(), 'Violencia y condición especial actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiViolencia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiViolencia $objetoxx)
  {
    //
  }
}
