<?php

namespace App\Traits\Fi\Datobasi;

use App\Http\Requests\FichaIngreso\FiDatosBasicoCrearRequest;
use App\Http\Requests\FichaIngreso\FiDatosBasicoMigrarCrearRequest;
use App\Http\Requests\FichaIngreso\FiDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Temacombo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if ($objetoxx->sis_nnaj->simianti_id < 1) {
            $objetoxx = $this->setNnajAnguoSimiIFT(['padrexxx' => $objetoxx]);
        }

        // elseif ($objetoxx->sis_nnaj->simianti_id < 1) {
        //     $document = GeNnajDocumento::where('numero_documento', $objetoxx->nnaj_docu->s_documento)->first();
        //     if ($document != null) {
        //         $objetoxx->sis_nnaj->update(['simianti_id' => $document->id_nnaj, 'useredita_id' => Auth::user()->id]);
        //     }
        // }
        $this->combos();
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $objetoxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $objetoxx)
    {
        $this->combos();
        $document = GeNnajDocumento::where('numero_documento', $objetoxx->nnaj_docu->s_documento)->first();
        if (isset($document->id_nnaj)) {
            $this->getUpisModalidadHT(['idnnajxx' => $document->id_nnaj, 'sisnnaji' => $objetoxx->sis_nnaj_id]);
        }

        if ($objetoxx->sis_nnaj->simianti_id < 1) {
            $objetoxx = $this->setNnajAnguoSimiIFT(['padrexxx' => $objetoxx]);
        }
        // elseif ($objetoxx->sis_nnaj->simianti_id < 1) {
        //     $document = GeNnajDocumento::where('numero_documento', $objetoxx->nnaj_docu->s_documento)->first();
        //     $objetoxx->sis_nnaj->update(['simianti_id' => $document->id_nnaj, 'user_edita_id' => Auth::user()->id]);
        // }

        $respuest = $this->getPuedeTPuede([
            'casoxxxx' => 1,
            'nnajxxxx' => $objetoxx->sis_nnaj_id,
            'permisox' => $this->opciones['permisox'] . '-editar',
        ]);

        // if ($respuest) { // if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => 'EDITAR REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        // }

        // ->fi_diligenc->toArray()
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




        // foreach (ParametroTema::orderBy('temacombo_id', 'ASC')->get() as $key => $value) {
        //     $idxxxxx = $key + 1;
        //     if ($idxxxxx > 2000 && $idxxxxx <= 3000) {
        //         $simianti = $value->simianti_id;
        //         if ($simianti == '') {
        //             $simianti = 0;
        //         }
        //         echo "ParametroTema::create(['parametro_id'=>$value->parametro_id,'temacombo_id'=>$value->temacombo_id,'simianti_id'=>'$simianti', 'sis_esta_id'=>$value->sis_esta_id ,'user_crea_id'=>$value->user_crea_id,'user_edita_id'=>$value->user_edita_id]); //$idxxxxx<br>";
        //     }
        // }

        // foreach (Parametro::orderBy('id', 'asc')->get() as $key => $value) {
        //     echo " Parametro::create(['id'=> $value->id,'sis_esta_id' => $value->sis_esta_id, 'user_crea_id' => $value->user_crea_id, 'user_edita_id' => $value->user_edita_id, 'nombre' => '$value->nombre' ]);<br>";
        // }

        // foreach (Role::get() as $key => $value) {
        //     echo " Role::create(['id'=>$value->id,'name' => '$value->name', 'user_crea_id' => $value->user_edita_id, 'user_edita_id' => $value->user_edita_id, 'sis_esta_id' => $value->sis_esta_id]);<br>";
        // }
        // return Role::get();
        // foreach (FosSeguimiento::orderBy('id', 'asc')->get() as $key => $value) {
        //     echo  "FosSeguimiento::create([
        //         'id'=>$value->id,
        //         'fos_tse_id'=>$value->fos_tse_id,
        //         'fos_stses_id'=>$value->fos_stses_id,
        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }

        // foreach (FosStse::orderBy('id', 'asc')->get() as $key => $value) {
        //     echo  "FosStse::create([
        //         'id'=>$value->id,
        // 'nombre'=>'$value->nombre',
        // 'estusuario_id'=>$value->estusuario_id,
        // 'descripcion'=>'$value->descripcion',
        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }


        // foreach (FosTse::orderBy('id', 'asc')->get() as $key => $value) {
        //     echo  "FosTse::create([
        //         'id'=>$value->id,
        //         'area_id'=>$value->area_id,
        // 'nombre'=>'$value->nombre',
        // 'estusuario_id'=>$value->estusuario_id,
        // 'descripcion'=>'$value->descripcion',
        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }

        // foreach (SisUpzbarri::orderBy('id', 'asc')->get() as $key => $value) {
        //     echo  "SisUpzbarri::create([
        //         'id'=>$value->id,
        //         'sis_localupz_id'=>$value->sis_localupz_id,
        //         'sis_barrio_id'=>$value->sis_barrio_id,
        //         'simianti_id'=>$value->simianti_id,
        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }

        // foreach (SisBarrio::orderBy('id', 'asc')->get() as $key => $value) {
        //     echo  "SisBarrio::create([
        //         'id'=>$value->id,
        //         's_barrio'=>'$value->s_barrio',
        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }

        // foreach (SisDepen::orderBy('id', 'asc')->get() as $key => $value) {
        //     $estusuar=$value->estusuario_id;
        //     if( $estusuar==''){
        //         $estusuar=1;
        //     }
        //     // echo $estusuar;
        //     echo  "SisDepen::create([
        //         'id'=>$value->id,
        //         'nombre'=>'$value->nombre',
        //         'i_prm_cvital_id'=>$value->i_prm_cvital_id,
        //         'i_prm_tdependen_id'=>$value->i_prm_tdependen_id,
        //         'i_prm_sexo_id'=>$value->i_prm_sexo_id,
        //         's_direccion'=>'$value->s_direccion',
        //         'sis_departam_id'=>$value->sis_departam_id,
        //         'sis_municipio_id'=>$value->sis_municipio_id,
        //         'estusuario_id'=>$estusuar,
        //         'simianti_id'=>$value->simianti_id,
        //         'sis_upzbarri_id'=>$value->sis_upzbarri_id,
        //         's_telefono'=>'$value->s_telefono',
        //         's_correo'=>'$value->s_correo',
        //         'itiestan'=>$value->itiestan,
        //         'itiegabe'=>$value->itiegabe,
        //         'itigafin'=>$value->itigafin,

        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }

        foreach (Temacombo::orderBy('id', 'asc')->get() as $key => $value) {
            echo  "Temacombo::create([
               'id'=>$value->id,
               'nombre'=>'$value->nombre',
               'tema_id'=>$value->tema_id,
               'sis_tcampo_id'=>$value->sis_tcampo_id,

                    'user_crea_id'=>$value->user_crea_id,
                    'user_edita_id'=>$value->user_edita_id,
                    'sis_esta_id'=>$value->sis_esta_id
                ]);<br>";
        }

        // foreach (AreaUser::orderBy('id', 'asc')->get() as $key => $value) {
        //     echo  "AreaUser::create([
        //        'id'=>$value->id,
        //             'area_id'=>$value->area_id,
        //             'user_id'=>$value->user_id,
        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }

        // foreach (SisDepeUsua::orderBy('id','asc')->get() as $key => $value) {
        //    echo  "SisDepeUsua::create([
        //        'id'=>$value->id,
        //             'sis_depen_id'=>$value->sis_depen_id,
        //             'i_prm_responsable_id'=>$value->i_prm_responsable_id,
        //             'user_id'=>$value->user_id,
        //             'user_crea_id'=>$value->user_crea_id,
        //             'user_edita_id'=>$value->user_edita_id,
        //             'sis_esta_id'=>$value->sis_esta_id
        //         ]);<br>";
        // }


        // $usersxxx = User::orderBy('id', 'asc')->get();
        // foreach ($usersxxx as $key => $value) {
        //     if ($value->id >= 0 && $value->id < 1000) {

        //         $useredit = $value->user_edita_id;
        //         if ($useredit > $value->id) {
        //             $useredit = 1;
        //         }
        //         echo ' User::create([
        //         "id" => ' . $value->id . ',
        //         "name" => "' . $value->name . '",
        //         "s_primer_nombre" => "' . $value->s_primer_nombre . '",
        //         "s_segundo_nombre" => "' . $value->s_segundo_nombre . '",
        //         "s_primer_apellido" => "' . $value->s_primer_apellido . '",
        //         "s_segundo_apellido" => "' . $value->s_segundo_apellido . '",
        //         "email" => "' . $value->email . '",
        //         "password" => "' . $value->s_documento . '",
        //         "sis_esta_id" => ' . $value->sis_esta_id . ',
        //         "user_crea_id" => ' . $value->user_crea_id . ',
        //         "user_edita_id" => ' . $useredit . ',
        //         "s_telefono" => "' . $value->s_telefono . '",
        //         "prm_tvinculacion_id" => ' . $value->prm_tvinculacion_id . ',
        //         "s_matriculap" => "' . $value->s_matriculap . '",
        //         "sis_cargo_id" => ' . $value->sis_cargo_id . ',
        //         "d_finvinculacion" =>  "' . $value->d_finvinculacion . '",
        //         "d_vinculacion" => "' . $value->d_vinculacion . '",
        //         "s_documento" => "' . $value->s_documento . '",
        //         "prm_documento_id" => ' . $value->prm_documento_id . ',
        //         "sis_municipio_id" => ' . $value->sis_municipio_id . ',
        //         "estusuario_id" => ' . ($value->estusuario_id != '' ? $value->estusuario_id : 1) . ',
        //         "itiestan" => ' . $value->itiestan . ',
        //         "itiegabe" => ' . $value->itiegabe . ',
        //         "itigafin" => ' . $value->itigafin . ',
        //         "password_change_at" => "' . $value->password_change_at . '",
        //         "password_reset_at" => "' . $value->password_reset_at . '",
        //         "polidato_at" => "' . $value->polidato_at . '",]); <br>
        //         ';
        //     }
        // }

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
        // $temaxxxx = Temacombo::find($temaxxxx);
        // foreach ($temaxxxx->parametros as $key => $valuexxx) {
        //     $multival = SisMultivalore::where('descripcion', $valuexxx->nombre)->where('tabla', $tablaxxx)->first();
        //     $codigoxx = 0;
        //     $sindatox = false;
        //     $descripc  = 'no existe en multivalores';
        //     if ($multival != null) {
        //         $codigoxx = $multival->codigo;
        //         $descripc = $multival->descripcion;
        //         $sindatox = true;
        //     }
        //     if ($sindatox && $valuexxx->pivot->simianti_id != '') {
        //         $sindatox = false;
        //     }
        //     $this->opciones['paramets'][] = [
        //         'idtemaxx' => $temaxxxx->id,
        //         'temaxxxx' => $temaxxxx->nombre,
        //         'idparame' => $valuexxx->id,
        //         'parametr' => $valuexxx->nombre,
        //         'simianti' => $valuexxx->pivot->simianti_id,
        //         'tablaxxx' => $tablaxxx,
        //         'codigoxx' => $codigoxx,
        //         'descripc' => $descripc,
        //         'sindatox' => $sindatox,
        //     ];
        // }


        // return $this->view(['modeloxx' => '', 'accionxx' => ['homologa', 'homologa']]);
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
