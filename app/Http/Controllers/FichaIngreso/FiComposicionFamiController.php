<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiComposicionFamiCrearRequest;
use App\Http\Requests\FichaIngreso\FiComposicionFamiUpdateRequest;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use Illuminate\Support\Carbon;

class FiComposicionFamiController extends Controller {

  private $opciones;

  public function __construct() {

    $this->opciones = [
        'tituloxx' => 'Composición familiar',
        'rutaxxxx' => 'FichaIngreso',
        'accionxx' => '',
        'permisox' => 'ficomposicion',
        'volverax' => 'lista de NNAJ',
        'readonly' => '',
        'slotxxxx' => 'composicion',
        'carpetax' => 'composicion',
        'routxxxx' => 'fi.datobasico',
        'routinde' => 'fi',
        'routnuev' => 'fi.datobasico',
        'modeloxx' => '',
        'urlxxxxx' => 'api/fi/ficomposicionfamiliar',
        'nuevoxxx' => 'o Registro',
    ];


    $this->middleware(['permission:'
        . $this->opciones['permisox'] . '-leer|'
        . $this->opciones['permisox'] . '-crear|'
        . $this->opciones['permisox'] . '-editar|'
        . $this->opciones['permisox'] . '-borrar']);
    $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
    $this->opciones['parentes'] = Tema::combo(66, true, false);
    $this->opciones['tipotele'] = Tema::combo(44, true, false);
    $this->opciones['vinculad'] = Tema::combo(287, true, false);
    $this->opciones['convivex'] = Tema::combo(23, true, false);
    $this->opciones['ocupacio'] = Tema::combo(156, true, false);
    $this->opciones['tipodocu'] = Tema::combo(3, true, false);
    $this->opciones['nacicomp'] = '';
    $this->opciones['cabecera'] = [
        ['td' => 'Id'],
        ['td' => 'PRIMER NOMBRE'],
        ['td' => 'SEGUNDO NOMBRE'],
        ['td' => 'PRIMER APELLIDO'],
        ['td' => 'SEGUNDO APELLIDO'],
        ['td' => 'DOCUMENTO'],
        ['td' => 'ESTADO'],
    ];
    $this->opciones['columnsx'] = [
        ['data' => 'btns', 'name' => 'btns'],
        ['data' => 'id', 'name' => 'fi_composicion_famis.id'],
        ['data' => 's_primer_nombre', 'name' => 'fi_composicion_famis.s_primer_nombre'],
        ['data' => 's_segundo_nombre', 'name' => 'fi_composicion_famis.s_segundo_nombre'],
        ['data' => 's_primer_apellido', 'name' => 'fi_composicion_famis.s_primer_apellido'],
        ['data' => 's_segundo_apellido', 'name' => 'fi_composicion_famis.s_segundo_apellido'],
        ['data' => 's_documento', 'name' => 'fi_composicion_famis.s_documento'],
        ['data' => 'sis_esta_id', 'name' => 'fi_composicion_famis.sis_esta_id'],
    ];
  }

  public function index($datobasi) {
    $this->opciones['esindexx'] = '';
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $this->opciones['nnajregi'] = $datobasi;
    $this->opciones['parametr'] = [$this->opciones['nnajregi']];
    return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
  }

  private function view($objetoxx, $nombobje, $accionxx) {
    $this->opciones['pais_idx'] = SisPai::combo(true, false);

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    $this->opciones['aniosxxx'] = '';
    $this->opciones['departam'] = ['' => 'Seleccione'];
    $this->opciones['municipi'] = ['' => 'Seleccione'];
    // indica si se esta actualizando o viendo
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
      $fechaxxx = explode('-', $objetoxx->d_nacimiento);
      $this->opciones['aniosxxx'] = Carbon::createFromDate($fechaxxx[0], $fechaxxx[1], $fechaxxx[2])->age;
      $this->opciones['municipi'] = SisMunicipio::combo($objetoxx->sis_departamento_id, false);
      $this->opciones['departam'] = SisDepartamento::combo($objetoxx->sis_pai_id, false);
    }

    $this->opciones['parametr'] = [$this->opciones['nnajregi']];

    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];

    return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create($datobasi) {
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }

  private function grabar($dataxxxx, $objectx, $infoxxxx, $datobasi) {
    $dataxxxx['fi_nucleo_familiar_id'] = FiDatosBasico::usarioNnaj($datobasi)->fi_nucleo_familiar_id;
    return redirect()
                    ->route('fi.composicion.editar', [$dataxxxx['sis_nnaj_id'], FiComposicionFami::transaccion($dataxxxx, $objectx)->id])
                    ->with('info', $infoxxxx);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(FiComposicionFamiCrearRequest $request, $datobasi) {
    return $this->grabar($request->all(), '', 'Composicion familiar creada con exito', $datobasi);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiComposicionFami  $residencia
   * @return \Illuminate\Http\Response
   */
  public function show(FiComposicionFami $reisidencia) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi, FiComposicionFami $objetoxx) {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx, 'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiComposicionFamiUpdateRequest $request, $datobasi, $id) {
    return $this->grabar($request->all(), FiComposicionFami::where('id', $id)->first(), 'Composicion familiar actualizada con exito', $datobasi);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiComposicionFami $objetoxx) {
    //
  }

}
