<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiResidenciaCrearRequest;
use App\Http\Requests\FichaIngreso\FiResidenciaUpdateRequest;
use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;

class FiResidenciaController extends Controller
{
  private $opciones;

  public function __construct()
  {

    $this->opciones = [
      'tituloxx' => 'Residencia',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'residencia',
      'carpetax' => 'residencia',
      'modeloxx' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'nuevoxxx' => 'o Registro'
    ];


    $this->middleware(['permission:'
        . $this->opciones['permisox'] . '-leer|'
        . $this->opciones['permisox'] . '-crear|'
        . $this->opciones['permisox'] . '-editar|'
        . $this->opciones['permisox'] . '-borrar']);


    $this->opciones['condicio'] = Tema::combo(23,true,false);

    $this->opciones['residees'] = Tema::combo(35,true,false);
    $this->opciones['tipodire'] = Tema::combo(36,true,false);
    $this->opciones['zonadire'] = Tema::combo(37,true,false);
    $this->opciones['cuadrant'] = Tema::combo(38,true,false);
    $this->opciones['alfabeto'] = Tema::combo(39,true,false);
    $this->opciones['estratox'] = Tema::combo(41,true,false);
    $this->opciones['condambi'] = Tema::combo(42,false,false);
    $this->opciones['tpviapal'] = Tema::combo(62,true,false);
    $this->opciones['esparcha'] = Tema::combo(291,true,false);

    $this->opciones['dircondi'] = Tema::combo(23,true,false);

    $this->opciones['localida'] = SisLocalidad::combo();
  }
  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
    $this->opciones['barrioxx'] = $this->opciones['upzxxxxx'];
    $this->opciones['readchcx'] = '';

    if($this->opciones['datobasi']->prm_poblacion_id== 650){
      $this->opciones['readchcx'] = 'readonly';
      $this->opciones['residees'] =[1=>'NO APLICA'];
      $this->opciones['localida'] =[22=>'NO APLICA'];
      $this->opciones['upzxxxxx'] =[134=>'NO APLICA'];
      $this->opciones['barrioxx'] =[1=>'NO APLICA'];
      $this->opciones['tiporesi'] = Tema::combo(145,true,false);
    }else{
      $this->opciones['tiporesi'] = Tema::combo(34,true,false);
    }

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    $this->opciones['condsele'] = FiCondicionAmbiente::getCondicionAbiente(0);
    if ($nombobje != '') {

      if ($objetoxx->i_prm_zona_direccion_id == 289) {
        $this->opciones['dircondi'] = [1 => 'NO APLICA'];
        $this->opciones['cuadrant'] = [1 => 'NO APLICA'];
        $this->opciones['alfabeto'] = [1 => 'NO APLICA'];
        $this->opciones['tpviapal'] = [1 => 'NO APLICA'];
      }
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
      $this->opciones['upzxxxxx'] = SisUpz::combo($objetoxx->sis_localidad_id, false);
      $this->opciones['barrioxx'] = SisBarrio::combo($objetoxx->sis_barrio->sis_upz_id, false);
      $this->opciones['condsele'] = FiCondicionAmbiente::getCondicionAbiente($objetoxx->id);

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
    $this->opciones['residenc'] = FiResidencia::residencia($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiResidencia::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.residencia.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }
  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    // dd($objetoxx);
    return redirect()
      ->route('fi.residencia.editar', [$dataxxxx['sis_nnaj_id'], FiResidencia::transaccion($dataxxxx,  $objetoxx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiResidenciaCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Residencia creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiResidencia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiResidencia $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiResidencia  $objetoxx
   * * @param    $nnajregi
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiResidencia $objetoxx)
  {
    $this->opciones['residenc'] = FiResidencia::residencia($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiResidencia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiResidenciaUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiResidencia::where('id',$id)->first(), 'Residencia actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiResidencia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiResidencia $objetoxx)
  {
    //
  }
}
