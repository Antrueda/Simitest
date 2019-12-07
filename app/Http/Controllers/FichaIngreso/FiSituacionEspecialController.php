<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSituacionEspecialCrearRequest;
use App\Http\Requests\FichaIngreso\FiSituacionEspecialUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\Tema;
use Illuminate\Http\Request;

class FiSituacionEspecialController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:fisituacion-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fisituacion-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fisituacion-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fisituacion-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Situacion',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'situacion',
      'carpetax' => 'situacion',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['viescnna'] = [];

    $this->opciones['situavul'] = Tema::combo(89, false, false);
    $this->opciones['ttiempox'] = Tema::combo(4, true, false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['tipoescn'] = Tema::combo(326, true, false);
    $this->opciones['iniciado'] = Tema::combo(327, false, false);
    $this->opciones['continua'] = Tema::combo(328, false, false);
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
    $this->opciones['situacio'] = FiSituacionEspecial::situaciones($this->opciones['datobasi']->sis_nnaj_id);
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
    
      $this->opciones['viescnna'] =$this->data(['padrexxx'=>$objetoxx->i_prm_tipo_id], false, false)['escnnaxx'];
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
    $situespe=FiSituacionEspecial::where('sis_nnaj_id',$datobasi)->first();
    if(isset($situespe->id)){
      return redirect()
      ->route('fi.situacion.editar', [$datobasi, $situespe->id]);
    }
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.situacion.editar', [$dataxxxx['sis_nnaj_id'], FiSituacionEspecial::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiSituacionEspecialCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Situación especial creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiSituacionEspecial  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiSituacionEspecial $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiSituacionEspecial  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiSituacionEspecial $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiSituacionEspecial  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiSituacionEspecialUpdateRequest $request,  $db, $id)
  {
    return $this->grabar($request->all(), FiSituacionEspecial::where('id', $id)->first(), 'Situación especial actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiSituacionEspecial  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiSituacionEspecial $objetoxx)
  {
    //
  }
  private function data($requestx, $cabecera, $ajaxxxxx)
  {
    return [
      'escnnaxx' => ($requestx['padrexxx'] == '') ? [] : (trim($requestx['padrexxx'] == 563) ? Tema::combo(58, $cabecera, $ajaxxxxx) : Tema::combo(126, $cabecera, $ajaxxxxx))
    ];
  }
  public function getEscnna(Request $request)
  { 
    if ($request->ajax()) {
      $dataxxxx = $this->data($request->all(), false, true);
      $comboxxx = [];
      foreach ($dataxxxx['escnnaxx'] as $escnnaxx) {
        $selected = '';
        if ($request->all()['selected'] != '') {
          
          foreach ($request->all()['selected'] as $pselecte) {
           
            if ($escnnaxx['valuexxx'] == $pselecte) {   
              $selected = 'selected';
            }
          }
        }

        $comboxxx[] = ['valuexxx' => $escnnaxx['valuexxx'], 'optionxx' => $escnnaxx['optionxx'], 'selected' => $selected];
      }
      return response()->json(['escnnaxx' => $comboxxx]);
    }
  }
}
