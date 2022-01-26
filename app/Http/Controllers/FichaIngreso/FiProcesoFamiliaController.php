<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiProcesoFamiliaCrearRequest;
use App\Http\Requests\FichaIngreso\FiProcesoFamiliaUpdateRequest;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiProcesoFamilia;

use App\Models\Tema;
use App\Traits\Fi\FiProcesoFamilia\FiProcesoFamiliaCrudTrait;
use App\Traits\Fi\FiTrait;

class FiProcesoFamiliaController extends Controller
{
  use FiTrait;
  use FiProcesoFamiliaCrudTrait;
  public function __construct()
  {

    $this->opciones = [
      'tituloxx' => 'Justicia Restaurativa',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'justicia',
      'carpetax' => 'procesojudicial',
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
    $this->opciones['condnoap'] = Tema::comboAsc(25, true, false);
    $this->opciones['titiempo'] = Tema::comboAsc(152, true, false);
  }


  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['compfami'] = FiCompfami::combo($this->opciones['datobasi'], true, false);
    $this->opciones['servicio'] = ['' => 'seleccione'];
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
    }
    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
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
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiProcesoFamiliaCrearRequest $request)
  {
    return $this->FiProcesoFamiliaCrudTrait($request->all(), '', 'Proceso creado con éxito');
  }



  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiProcesoFamilia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiProcesoFamilia $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiProcesoFamilia  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiProcesoFamiliaUpdateRequest $request,  $db, $id)
  {
    return $this->FiProcesoFamiliaCrudTrait($request->all(), FiProcesoFamilia::where('id', $id)->first(), 'Proceso actualizado con éxito');
  }
}
