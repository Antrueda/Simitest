<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiEnfermedadesFamiliaCrearRequest;
use App\Http\Requests\FichaIngreso\FiEnfermedadesFamiliaUpdateRequest;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiEnfermedadesFamilia;

use App\Models\Tema;

class FiEnfermedadesFamiliaController extends Controller
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
      'slotxxxx' => 'salud',
      'carpetax' => 'saludenfermedad',
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

    $this->opciones['condicio'] = Tema::combo(23, true, false);
  }


  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['compfami'] = FiComposicionFami::combo($this->opciones['datobasi'], true, false);
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
      ->route('fi.saludenfermedad.editar', [$dataxxxx['sis_nnaj_id'], FiEnfermedadesFamilia::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiEnfermedadesFamiliaCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Enfermedad creada con exito');
  }



  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiEnfermedadesFamilia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiEnfermedadesFamilia $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiEnfermedadesFamilia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiEnfermedadesFamiliaUpdateRequest $request,  $db, $id)
  {
    return $this->grabar($request->all(), FiEnfermedadesFamilia::where('id', $id)->first(), 'Enfermedad actualizada con exito');
  }
}
