<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiJusticiaRestaurativaCrearRequest;
use App\Http\Requests\FichaIngreso\FiJusticiaRestaurativaUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJusticiaRestaurativa;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;
use App\Models\Tema;

class FiJusticiaRestaurativaController extends Controller
{

  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:fijusticia-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fijusticia-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fijusticia-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fijusticia-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Justicia Restaurativa',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'slotxxxx' => 'justicia',
      'carpetax' => 'justicia',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro',
      'permisox' => 'fijrfamiliar',
      'urlxxxxx' => 'api/fi/fijrfamiliar',
    ];

    $this->opciones['condicio'] = Tema::combo(23, true, false);
    $this->opciones['condnoap'] = Tema::combo(25, true, false);
    $this->opciones['actupard'] = Tema::combo(25, true, false);
    $this->opciones['actusrpa'] = Tema::combo(25, true, false);
    $this->opciones['actuspoa'] = Tema::combo(25, true, false);
    $this->opciones['motipard'] = Tema::combo(45, true, false);
    $this->opciones['motisrpa'] = Tema::combo(46, true, false);
    $this->opciones['sancsrpa'] = Tema::combo(47, true, false);
    $this->opciones['motispoa'] = Tema::combo(48, true, false);
    $this->opciones['sancspoa'] = Tema::combo(49, true, false);
    $this->opciones['causviol'] = Tema::combo(120, true, false);
    $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
    $this->opciones['tablname'] = 'jrfamili';
    $this->opciones['vincviol'] = Tema::combo(120, true, false);
    $this->opciones['riesviol'] = Tema::combo(120, true, false);
    $this->opciones['titipard'] = Tema::combo(152, true, false);
    $this->opciones['titisrpa'] = Tema::combo(152, true, false);
    $this->opciones['titispoa'] = Tema::combo(152, true, false);
    $this->opciones['condspoa'] = Tema::combo(25, true, false);

    $this->opciones['cabecera'] = [
      ['td' => 'FAMILIAR'],
      ['td' => 'PROCESO'],
      ['td' => 'VIGENTE'],
      ['td' => 'NO. DE VECES'],
      ['td' => 'MOTIVO'],
      ['td' => 'HACE CUÁNTO'],
      ['td' => 'TIPO TIEMPO'],
      ['td' => 'ACTIVO'],
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns', 'name' => 'btns'],
      ['data' => 's_primer_nombre', 'name' => 'fi_composicion_famis.s_primer_nombre'],
      ['data' => 's_proceso', 'name' => 'fi_proceso_familias.s_proceso'],
      ['data' => 'vigente', 'name' => 'parametros.nombre as vigente'],
      ['data' => 'i_numero_veces', 'name' => 'fi_proceso_familias.i_numero_veces'],
      ['data' => 's_motivo', 'name' => 'fi_proceso_familias.s_motivo'],
      ['data' => 'i_hace_cuanto', 'name' => 'fi_proceso_familias.i_hace_cuanto'],
      ['data' => 'tiempo', 'name' => 'parametros.nombre as tiempo'],
      ['data' => 'activo', 'name' => 'fi_proceso_familias.activo'],
    ];
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['parametr'] = [$this->opciones['nnajregi']];

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;

    // Inicializa composrtamiento de campos abiertos
    $this->opciones['readpard'] = '';
    $this->opciones['readnomd'] = '';
    $this->opciones['readteld'] = '';
    $this->opciones['readluga'] = '';
    $this->opciones['readsrpa'] = '';
    $this->opciones['readspoa'] = '';

    // Si es CHC
    if ($this->opciones['datobasi']->prm_poblacion_id == 650) {
      $this->opciones['condicio'] = [1 => 'NO APLICA'];
      $this->opciones['condnoap'] = [1 => 'NO APLICA'];
      $this->opciones['actupard'] = [1 => 'NO APLICA'];
      $this->opciones['actusrpa'] = [1 => 'NO APLICA'];
      $this->opciones['actuspoa'] = [1 => 'NO APLICA'];
      $this->opciones['titipard'] = [1 => 'NO APLICA'];
      $this->opciones['motipard'] = [1 => 'NO APLICA'];
      $this->opciones['readpard'] = 'readonly';
      $this->opciones['readnomd'] = 'readonly';
      $this->opciones['readteld'] = 'readonly';
      $this->opciones['readluga'] = 'readonly';
      $this->opciones['titisrpa'] = [1 => 'NO APLICA'];
      $this->opciones['motisrpa'] = [1 => 'NO APLICA'];
      $this->opciones['readsrpa'] = 'readonly';
      $this->opciones['sancsrpa'] = [1 => 'NO APLICA'];
      $this->opciones['titispoa'] = [1 => 'NO APLICA'];
      $this->opciones['motispoa'] = [1 => 'NO APLICA'];
      $this->opciones['readspoa'] = 'readonly';
      $this->opciones['sancspoa'] = [1 => 'NO APLICA'];
      $this->opciones['condspoa'] = [1 => 'NO APLICA'];
      $this->opciones['vincviol'] = [1 => 'NO APLICA'];
      $this->opciones['riesviol'] = [1 => 'NO APLICA'];
    }

    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones['puedexxx'] = '';
      if ($objetoxx->i_prm_vinculado_violencia_id == 228) {
        $this->opciones['vincviol'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->i_prm_riesgo_participar_id == 228) {
        $this->opciones['riesviol'] = [1 => 'NO APLICA'];
      }



      $pardxxxx = FiProcesoPard::where('fi_justicia_restaurativa_id', $objetoxx->id)->first();
      $objetoxx->i_prm_ha_estado_pard_id = $pardxxxx->i_prm_ha_estado_pard_id;
      $objetoxx->i_prm_actualmente_pard_id = $pardxxxx->i_prm_actualmente_pard_id;
      $objetoxx->i_prm_tipo_tiempo_pard_id = $pardxxxx->i_prm_tipo_tiempo_pard_id;
      $objetoxx->i_cuanto_pard = $pardxxxx->i_cuanto_pard;
      $objetoxx->i_prm_motivo_pard_id = $pardxxxx->i_prm_motivo_pard_id;
      $objetoxx->s_nombre_defensor = $pardxxxx->s_nombre_defensor;
      $objetoxx->s_telefono_defensor = $pardxxxx->s_telefono_defensor;
      $objetoxx->s_lugar_abierto_pard = $pardxxxx->s_lugar_abierto_pard;

      $srpaxxxx = FiProcesoSrpa::where('fi_justicia_restaurativa_id', $objetoxx->id)->first();
      $objetoxx->i_prm_ha_estado_srpa_id = $srpaxxxx->i_prm_ha_estado_srpa_id;
      $objetoxx->i_prm_actualmente_srpa_id = $srpaxxxx->i_prm_actualmente_srpa_id;
      $objetoxx->i_prm_tipo_tiempo_srpa_id = $srpaxxxx->i_prm_tipo_tiempo_srpa_id;
      $objetoxx->i_cuanto_srpa = $srpaxxxx->i_cuanto_srpa;
      $objetoxx->i_prm_motivo_srpa_id = $srpaxxxx->i_prm_motivo_srpa_id;
      $objetoxx->i_prm_sancion_srpa_id = $srpaxxxx->i_prm_sancion_srpa_id;

      $spoaxxxx = FiProcesoSpoa::where('fi_justicia_restaurativa_id', $objetoxx->id)->first();
      $objetoxx->i_prm_ha_estado_spoa_id = $spoaxxxx->i_prm_ha_estado_spoa_id;
      $objetoxx->i_prm_actualmente_spoa_id = $spoaxxxx->i_prm_actualmente_spoa_id;
      $objetoxx->i_prm_tipo_tiempo_spoa_id = $spoaxxxx->i_prm_tipo_tiempo_spoa_id;
      $objetoxx->i_cuanto_spoa = $spoaxxxx->i_cuanto_spoa;
      $objetoxx->i_prm_motivo_spoa_id = $spoaxxxx->i_prm_motivo_spoa_id;
      $objetoxx->i_prm_mod_cumple_pena_id = $spoaxxxx->i_prm_mod_cumple_pena_id;
      $objetoxx->i_prm_ha_estado_preso_id = $spoaxxxx->i_prm_ha_estado_preso_id;

      if ($objetoxx->i_prm_ha_estado_pard_id != 227) {
        $this->opciones['actupard'] = [1 => 'NO APLICA'];
        $this->opciones['titipard'] = [1 => 'NO APLICA'];
        $this->opciones['motipard'] = [1 => 'NO APLICA'];
        $this->opciones['readpard'] = 'readonly';
        $this->opciones['readnomd'] = 'readonly';
        $this->opciones['readteld'] = 'readonly';
        $this->opciones['readluga'] = 'readonly';
      }


      if ($objetoxx->i_prm_actualmente_pard_id != 227) {
        $this->opciones['titipard'] = [1 => 'NO APLICA'];
        $this->opciones['motipard'] = [1 => 'NO APLICA'];
        $this->opciones['readpard'] = 'readonly';
        $this->opciones['readnomd'] = 'readonly';
        $this->opciones['readteld'] = 'readonly';
        $this->opciones['readluga'] = 'readonly';
      }
      
      if ($objetoxx->i_prm_ha_estado_srpa_id != 227) {
        $this->opciones['actusrpa'] = [1 => 'NO APLICA'];
        $this->opciones['titisrpa'] = [1 => 'NO APLICA'];
        $this->opciones['motisrpa'] = [1 => 'NO APLICA'];
        $this->opciones['readsrpa'] = 'readonly';
        $this->opciones['sancsrpa'] = [1 => 'NO APLICA'];
      }
      
      
      if($objetoxx->i_prm_actualmente_pard_id!=227){
        $this->opciones['titisrpa'] = [1 => 'NO APLICA'];
        $this->opciones['motisrpa'] = [1 => 'NO APLICA'];
        $this->opciones['readsrpa'] = 'readonly';
        $this->opciones['sancsrpa'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->i_prm_ha_estado_spoa_id != 227) {
        $this->opciones['actuspoa'] = [1 => 'NO APLICA'];
        $this->opciones['titispoa'] = [1 => 'NO APLICA'];
        $this->opciones['motispoa'] = [1 => 'NO APLICA'];
        $this->opciones['readspoa'] = 'readonly';
        $this->opciones['sancspoa'] = [1 => 'NO APLICA'];
        $this->opciones['condspoa'] = [1 => 'NO APLICA'];
      }

      if ($objetoxx->i_prm_actualmente_spoa_id != 227) {
        
        $this->opciones['titispoa'] = [1 => 'NO APLICA'];
        $this->opciones['motispoa'] = [1 => 'NO APLICA'];
        $this->opciones['readspoa'] = 'readonly';
        $this->opciones['sancspoa'] = [1 => 'NO APLICA'];
        $this->opciones['condspoa'] = [1 => 'NO APLICA'];
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
    $this->opciones['justicia'] = FiJusticiaRestaurativa::justicia($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiJusticiaRestaurativa::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.justicia.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }

  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    return redirect()
      ->route('fi.justicia.editar', [$dataxxxx['sis_nnaj_id'], FiJusticiaRestaurativa::transaccion($dataxxxx,  $objetoxx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiJusticiaRestaurativaCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Justicia restaurativa creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiJusticiaRestaurativa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiJusticiaRestaurativa $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiJusticiaRestaurativa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiJusticiaRestaurativa $objetoxx)
  {

    $this->opciones['justicia'] = FiJusticiaRestaurativa::justicia($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiJusticiaRestaurativa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiJusticiaRestaurativaUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiJusticiaRestaurativa::where('id', $id)->first(), 'Justicia Restaurativa actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiJusticiaRestaurativa  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiJusticiaRestaurativa $objetoxx)
  {
    //
  }
}
