<?php

namespace App\Traits\Fi\Datobasi;

use App\Http\Requests\FichaIngreso\FiDatosBasicoCrearRequest;
use App\Http\Requests\FichaIngreso\FiDatosBasicoMigrarCrearRequest;
use App\Http\Requests\FichaIngreso\FiDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Temacombo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DBControllerTrait
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $this->combos();
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => 'GUARDAR', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
    }
    public function agregar(Request $request)
    {
        $this->combos();
        $dataxxxx = ["docuagre" => $request->docuagre, 'buscarxx' => true];
        $nnajxxxx = $this->getBuscarNnajAgregar($dataxxxx);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => 'GUARDAR', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->viewagregar(['modeloxx' => $nnajxxxx, 'accionxx' => ['adicionar', 'formulario']]);
    }
    public function store(FiDatosBasicoCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['pasaupis'] = false;
        $dataxxxx['simianti_id'] = 0;
        $dataxxxx['prm_nuevoreg_id'] = 227;
        return $this->setDatosBasicos($dataxxxx, '', 'Datos básicos creados con éxito');
    }

    public function adicionar(FiDatosBasicoMigrarCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['pasaupis'] = true;
        return $this->setDatosBasicos($dataxxxx, '', 'Datos básicos creados con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $objetoxx)
    {
        $this->getMigrado(['document' => $objetoxx->nnaj_docu->s_documento]);
        if ($objetoxx->sis_nnaj->simianti_id < 1) {
            $objetoxx = $this->setNnajAnguoSimiIFT(['padrexxx' => $objetoxx]);
        }
        $this->combos();
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $objetoxx]);
    }

    /**
     * marcar el nnaj en el antiguo desarrollo que ya se encuentra migrado al nuevo desarrollo
     */
    public function getMigrado($dataxxxx)
    {
        // * consultar la cédula
        $document = GeNnajDocumento::where('numero_documento', $dataxxxx['document'])->first();
            // * el nnaj no ha sido marcado
            if (isset($document->nuevdesa_id) && $document->nuevdesa_id == 228) {
                $document->nuevdesa_id = 227;
                $document->save();
            }
        return $document;
    }

    /**
     * Editar un nnaj crado por ficha ingreso
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $objetoxx)
    {
        $document = $this->getMigrado(['document' => $objetoxx->nnaj_docu->s_documento]);
        if (isset($document->id_nnaj)) {
            $this->getUpisModalidadHT(['idnnajxx' => $document->id_nnaj, 'sisnnaji' => $objetoxx->sis_nnaj_id]);
        }

        if ($objetoxx->sis_nnaj->simianti_id < 1) {
            $objetoxx = $this->setNnajAnguoSimiIFT(['padrexxx' => $objetoxx]);
        }
        $respuest = $this->getPuedeTPuede([
            'casoxxxx' => 1,
            'nnajxxxx' => $objetoxx->sis_nnaj_id,
            'permisox' => $this->opciones['permisox'] . '-editar',
        ]);
        return $this->edtitAuxiliar($objetoxx);
    }

    /**
     * Editar nnaj creado por contacto único en asistencia de la acta de encuentro
     *
     * @param FiDatosBasico $objetoxx
     * @return void
     */
    public function editAsistenciaANnnj(FiDatosBasico $objetoxx)
    {
        $this->opciones['tabsxxxx'] = 'tannajas';
        return $this->edtitAuxiliar($objetoxx);
    }

    /**
     * metodo auxiliar para ser llamado desde diferentes partes en el actualizar
     *
     * @param object $objetoxx
     * @return void
     */
    public function edtitAuxiliar($objetoxx)
    {
        $this->combos();
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => 'GUARDAR', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $objetoxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiDatosBasicoUpdateRequest $request,  FiDatosBasico $objetoxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['pasaupis'] = false;
        if ($objetoxx->sis_nnaj->prm_escomfam_id == 2686) {
            $dataxxxx['prm_escomfam_id'] = 227;
        }
        return $this->setDatosBasicos($dataxxxx, $objetoxx, 'Datos básicos actualizados con éxito');
    }

    public function inactivate(FiDatosBasico $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $objetoxx]);
    }


    public function destroy(Request $request, FiDatosBasico $objetoxx)
    {

        $objetoxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'NNAJ inactivado correctamente');
    }

    public function getArmaCamposTabalSimiAnti()
    {

        // $tamacomb = Temacombo::find(53);

        // foreach (SisSpa::get(['id_spa', 'nombre_spa']) as $key => $value) {
        //     $parametu = Parametro::where('nombre', $value->nombre_spa)->first();
        //     if ($parametu == null) {
        //         $parametu = new Parametro();
        //         $parametu->nombre = $value->nombre_spa;
        //         $parametu->sis_esta_id = 1;
        //         $parametu->user_crea_id = Auth::user()->id;
        //         $parametu->user_edita_id = Auth::user()->id;
        //         echo "$value->id_spa {$value->nombre_spa}<br>";
        //     } else {
        //         $paraexis = $tamacomb->parametros->where('nombre', $value->nombre_spa)->first();
        //         if ($paraexis != null) {
        //             // echo "$value->id_spa {$value->nombre_spa}<br>";
        //             // $tamacomb->parametros()->updateExistingPivot($paraexis->id, ['simianti_id' => $value->id_spa, 'user_edita_id' => Auth::user()->id], false);
        //         } else {
        //             // echo "$value->id_spa {$value->nombre_spa}<br>";
        //         }
        //     }
        // }
        // echo '<br>';
        // foreach ($tamacomb->parametros as $key => $value) {
        //     if ($value->pivot->simianti_id < 1) {
        //         echo "$value->id {$value->nombre} <br>";
        //     } else {
        //         // echo "$value->id {$value->nombre} <br>";
        //     }
        // }

        // $tamacomb->parametros()
        //     ->updateExistingPivot(2465, ['simianti_id' => 35, 'user_edita_id' => Auth::user()->id], false);
        // ddd(4);


        //     echo 'protected $fillable = [<br>';
        //     $dd=SisSpa::first();
        //     foreach ($dd->toArray() as $key => $value) {
        //        echo "'$key',<br>";
        //     }
        // echo '];';

    }

    public function prueba($temaxxxx, $tablaxxx, Request $request)
    {

        // php artisan vendor:publish --provider="BeyondCode\QueryDetector\QueryDetectorServiceProvider"

        // $this->getArmaCamposTabalSimiAnti();
        // $this->getRocorrerCedula();
        // $i = 1;
        // $tables = DB::select('SHOW TABLES');
        // foreach ($tables as $key => $data) {
        //     $tablaxxx = explode('_', $data->Tables_in_laravel);
        //     if ($tablaxxx[0] != 'h') {
        //         //  echo "SisTabla::create(['sis_docfuen_id'=>1 , 's_tabla'=>'{$data->Tables_in_laravel}',     's_descripcion'=>'{$data->Tables_in_laravel}','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);<br>";

        //         //     $tablsinh = str_replace('h_', '', $data->Tables_in_laravel);
        //         //     $table = SisTabla::where('s_tabla', $tablsinh)->first();
        //         //     if ($table == null) {
        //         //         // $table = SisTabla::create([
        //         //         //     'sis_docfuen_id'    => 2,
        //         //         //     's_tabla'           => $tablsinh,
        //         //         //     's_descripcion'     => $tablsinh,
        //         //         //     'sis_esta_id'       => 1,
        //         //         //     'user_crea_id'      => 1,
        //         //         //     'user_edita_id'     => 1
        //         //         // ]);
        //         //     }

        //         $columnsData = DB::select("SELECT COLUMN_NAME, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_NAME = '{$data->Tables_in_laravel}'");

        //         foreach ($columnsData as $columnData) {
        //             if ($columnData->COLUMN_NAME != 'id') {
        //                 $campoxxx = explode('_', $columnData->COLUMN_NAME);
        //                 if (in_array('prm', $campoxxx)) {
        //                     echo    "SisTcampo::create([
        //                     's_campo'           => '$columnData->COLUMN_NAME',
        //                     'temacombo_id'    => 1,
        //                     'sis_tabla_id'      =>" . $i . ",
        //                     'user_crea_id'      => 1,
        //                     'user_edita_id'     => 1,
        //                     'sis_esta_id'       => 1
        //                     ]);<br>";
        //                 }

        //                 // $campoxxx = explode('_', $columnData->COLUMN_NAME);
        //                 /**
        //                  * solo campos que son parámetros, los campos abiertos no sirven, ni los campos mágicos
        //                  */
        //                 // if (in_array('prm', $campoxxx)) {
        //                 // //    SisTcampo::create([
        //                 // //     's_campo'           => $columnData->COLUMN_NAME,
        //                 // //     // 's_numero'          => '1',
        //                 // //     'temacombo_id'    => 1,
        //                 // //     // 'tema_id'           => 1,
        //                 // //     'sis_tabla_id'      => $table->id,
        //                 // //     'user_crea_id'      => 1,
        //                 // //     'user_edita_id'     => 1,
        //                 // //     'sis_esta_id'       => 1
        //                 // // ]);
        //                 // }
        //             }
        //         }
        //         $i++;
        //     }
        // }

        // $this->setNnajPNT(['padrexxx' => FiDatosBasico::first()]);
        // $this->opciones['botoform'][] =
        //     [
        //         'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
        //         'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        //     ];
        // $this->opciones['multivax'] = SisMultivalore::where('tabla', $tablaxxx)->get();
        // // ddd($this->opciones['multival']);
        // $this->opciones['paramets'] = [];
        $temaxxxx = Temacombo::find($temaxxxx);
        foreach ($temaxxxx->parametros as $key => $valuexxx) {
            $multival = SisMultivalore::where('descripcion', $valuexxx->nombre)->where('tabla', $tablaxxx)->first();
            $codigoxx = 0;
            $sindatox = false;
            $descripc  = 'no existe en multivalores';
            if ($multival != null) {
                $codigoxx = $multival->codigo;
                $descripc = $multival->descripcion;
                $sindatox = true;
            }
            if ($sindatox && $valuexxx->pivot->simianti_id != '') {
                $sindatox = false;
            }
            $this->opciones['paramets'][] = [
                'idtemaxx' => $temaxxxx->id,
                'temaxxxx' => $temaxxxx->nombre,
                'idparame' => $valuexxx->id,
                'parametr' => $valuexxx->nombre,
                'simianti' => $valuexxx->pivot->simianti_id,
                'tablaxxx' => $tablaxxx,
                'codigoxx' => $codigoxx,
                'descripc' => $descripc,
                'sindatox' => $sindatox,
            ];
        }


        return $this->view(['modeloxx' => '', 'accionxx' => ['homologa', 'homologa']]);
    }
    public function homologa($temacomb, $parametr, $codigoxx, $tablaxxx)
    {
        $temaxxxx = Temacombo::find($temacomb)
            ->parametros()
            ->updateExistingPivot($parametr, ['simianti_id' => $codigoxx, 'user_edita_id' => Auth::user()->id], false);
        return redirect()
            ->route('fidatbas.homologx', [$temacomb, $tablaxxx])
            ->with('info', 'parametro homologado');
    }
}
