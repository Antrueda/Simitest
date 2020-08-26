<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiFormacionCrearRequest;
use App\Http\Requests\FichaIngreso\FiFormacionUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiFormacion;
use App\Models\Sistema\SisInstitucionEdu;
use App\Models\Tema;

class FiFormacionController extends Controller
{
  private $opciones;
  public function __construct()
  {

    $this->opciones = [
      'tituloxx' => 'Formacion',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'formacion',
      'carpetax' => 'formacion',
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

    $this->opciones['actuestu'] = Tema::combo(23, true, false);
    $this->opciones['condicio'] = Tema::combo(23, true, false);
    $this->opciones['motvincu'] = Tema::combo(63, false, false);
    $this->opciones['natuenti'] = Tema::combo(130, true, false);
    $this->opciones['jornestu'] = Tema::combo(151, true, false);
    $this->opciones['ulnivest'] = Tema::combo(153, true, false);
    $this->opciones['ulgradap'] = Tema::combo(154, true, false);
    $this->opciones['insti_id'] = SisInstitucionEdu::combo(true, false);
  }
  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
    $this->opciones['readdiax'] = '';
    $this->opciones['readmesx'] = '';
    $this->opciones['readanox'] = '';

    // Si es CHC
    if($this->opciones['datobasi']->prm_poblacion_id == 650){
      $this->opciones['natuenti'] = [1 => 'NO APLICA'];
      $this->opciones['jornestu'] = [1 => 'NO APLICA'];
      $this->opciones['insti_id'] = [1 => 'NO APLICA'];
      $this->opciones['actuestu']=[228=>'NO'];
    }

    if ($nombobje != '') {
      if ($objetoxx->i_prm_estudia_id == 228) {
        $this->opciones['natuenti'] = [1 => 'NO APLICA'];
        $this->opciones['jornestu'] = [1 => 'NO APLICA'];
      } elseif($objetoxx->i_prm_estudia_id == 227) {
        $this->opciones['readdiax'] = 'readonly';
        $this->opciones['readmesx'] = 'readonly';
        $this->opciones['readanox'] = 'readonly';
      }
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
    }
    $this->opciones['vinculac'] = FiFormacion::getMotivoVinculacion($objetoxx);


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
    $vestuari = FiFormacion::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.formacion.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {

    return redirect()
      ->route('fi.formacion.editar', [$dataxxxx['sis_nnaj_id'], FiFormacion::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiFormacionCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Formación creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiFormacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiFormacion $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiFormacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiFormacion $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiFormacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiFormacionUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiFormacion::where('id', $id)->first(), 'Formación actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiFormacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiFormacion $objetoxx)
  {
    //
  }
}
