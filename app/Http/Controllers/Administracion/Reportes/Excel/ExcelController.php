<?php

namespace App\Http\Controllers\Administracion\Reportes\Excel;

use App\Exports\FiDatosBasicoExport;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Simianti\Ge\GeUpi;
use App\Models\Sistema\SisTabla;
use App\Models\Sistema\SisTcampo;
use App\Models\User;
use App\Models\Usuario\RolUsuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{

    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'excel';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'REPORTES';
        $this->opciones['routxxxx'] = 'excel';
        $this->opciones['slotxxxx'] = 'excel';
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'administracion.Reportes.';
        $this->opciones['parametr'] = [];
        $this->opciones['carpetax'] = 'Proyectos';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';



        $this->opciones['tituloxx'] = "REPORTES PROYECTO 7720";
        $this->opciones['botoform'] = [
            // [
            //     'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
            //     'formhref' => 2, 'tituloxx' => 'VOLVER A NNAJ', 'clasexxx' => 'btn btn-sm btn-primary'
            // ],
        ];
    }

    public function index()
    {
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO NNAJ',
                'titulist' => 'LISTA DE NNAJ',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', []),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_datos_basicos.id'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    private function grabar($dataxxxx, $objetoxx, $infoxxxx)
    {
        $dataxxxx['sis_docfuen_id'] = 2;
        $dataxxxx['sis_esta_id'] = 1;
        $usuariox = $this->bitacora->grabar($dataxxxx, $objetoxx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$usuariox->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        $this->opciones['aniosxxx']  = [];
        for ($i = 2021; $i <= date('Y'); $i++) {
            $this->opciones['aniosxxx'] [$i] = $i;
        }
        $this->opciones['mesesxxx'] = [];
        for ($i = 1; $i <= 12; $i++) {
            $this->opciones['mesesxxx'][$i] = $i;
        }
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];

        // $db = DB::connection('simiantiguo');
        // $data = $db->select("SELECT * FROM TABLE (mid_general_anual(?, ?, ?))", ['1020733537', '01/09/2020', '30/10/2020']);
        // dd($data);

        $tablas = SisTabla::pluck('s_tabla', 'id');
        // Obtenemos el primer objeto de la colleccion del modelo principal.
        // $fiDatosBasicos = FiDatosBasico::first();
        // $this->opciones['maintabl'] = $this->contructColumnsOptions($fiDatosBasicos, array_keys($fiDatosBasicos->toArray()));
        $this->opciones['tablesxx'] = $tablas;
        // dd($this->contructColumnsOptions($fiDatosBasicos, array_keys($fiDatosBasicos->toArray())));

        if ($dataxxxx['modeloxx'] != '') {


            $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
            $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];

            $this->opciones['perfilxx'] = 'conperfi';
            $this->opciones['usuariox'] =  $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas





            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getExcel()
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'Generar', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
    }
    public function setExcel()
    {
        return (new FiDatosBasicoExport)->download('invoices.xlsx');
        // return (new FiDatosBasicoExport)->download('invoices.xls', \Maatwebsite\Excel\Excel::XLS);
        // return (new FiDatosBasicoExport)->download('invoices.xlsx', \Maatwebsite\Excel\Excel::XLSX);
        // return (new FiDatosBasicoExport)->download('invoices.xls');
        // return Excel::download(new FiDatosBasicoExport, 'users-collection.xlsx');
    }
    public function armarSeeder()
    {
        $dataxxxx = RolUsuario::get();
        //$dataxxxx = GeUpi::wherenotin('id_upi',[13,6,12,19,20,233,10,245,1,2,8,7,3,5,4,140,212,21,16,14,27,9,18,17,45])->get();
        foreach ($dataxxxx as $registro) {
            echo "RolUsuario::create([
                'role_id' => {$registro->role_id},
                'model_id' => {$registro->model_id},
                'model_type' =>  '{$registro->model_type}',
                'user_edita_id' => 1,
                'user_crea_id' => 1,
                'sis_esta_id' => 1,

            ]); <br />";;
        }
    }
    //   RolUsuario::create(["role_id" => 9, "model_id" => 12, "model_type" => "App\Models\User", "user_crea_id" => 1, "user_edita_id" => 1, "sis_esta_id" => 1]);

    public function store(Request $request)
    {
        $mapRetaltions = [];
        $tables = SisTabla::whereIn('id', $request->tablesxx)->pluck('s_tabla')->toArray();
        foreach ($tables as $key => $tableName) {
            $fields = SisTcampo::where('sis_tabla_id', $key)->pluck('s_campo');
            foreach ($fields as $key => $fieldName) {
                $fieldNameToArray = explode('_', $fieldName);
                if(count($fieldNameToArray) > 1 && in_array('id', $fieldNameToArray) && (!in_array('prm', $fieldNameToArray) || !in_array('parametro', $fieldNameToArray))) {
                    $fieldToTable = str_replace('_id', 's', $fieldName);
                    if(in_array($fieldToTable, array_values($tables))) {
                        // dd($fieldToTable);
                        $mapRetaltions[] = [$fieldToTable, "$fieldToTable.id", "$tableName.$fieldName"];
                    }
                } else if (count($fieldNameToArray) > 1 && in_array('id', $fieldNameToArray) && (in_array('prm', $fieldNameToArray) || in_array('parametro', $fieldNameToArray))) {
                    $mapRetaltions[] = ['parametros', "parametros.id", "$tableName.$fieldName"];
                }
            }
        }
        $selecctionToProcessing = SisTcampo::select('sis_tablas.id', 'sis_tablas.s_tabla AS table', DB::raw("GROUP_CONCAT(CONCAT(sis_tablas.s_tabla, '.', sis_tcampos.s_campo)) AS fieldToSelect"))->join('sis_tablas', 'sis_tablas.id', 'sis_tcampos.sis_tabla_id')->whereIn('sis_tcampos.id', $request->columnsx)->groupBy('sis_tablas.s_tabla')->get();
        foreach ($selecctionToProcessing as $tableSelection) {
            $fields = SisTcampo::where('sis_tabla_id', $tableSelection->id)->pluck('s_campo');
            foreach ($fields as $key => $fieldName) {
                $fieldNameToArray = explode('_', $fieldName);
                if(count($fieldNameToArray) > 1 && in_array('id', $fieldNameToArray)){
                    if(in_array($fieldToTable, array_values($tables))) {
                        // dd($fieldToTable);
                        $mapRetaltions[] = [$fieldToTable, "$fieldToTable.id", "$tableName.$fieldName"];
                    }
                }
            }
            dd($selecctionToProcessing);
        }
        dd($columns);
        $data = DB::table($request->tablesxx[0])->select($columns);
        foreach ($mapRetaltions as $key => [$tableToJoin, $fieldToJoinId, $fieldId]) {
            $data = $data->join($tableToJoin, $fieldToJoinId, $fieldId);
        }

        dd($data->get());
        // $fiDatosBasicos = FiDatosBasico::first();
        // $headersx = $this->contructColumnsOptions($fiDatosBasicos, array_keys($fiDatosBasicos->toArray()));
        ob_end_clean();
        ob_start();
        return Excel::download(new UsersExport($request, $headersx), 'users_report.xlsx');
    }

    public function getDataFields(Request $request)
    {
        // $fiDatosBasicos = FiDatosBasico::first();
        // $fields = [];
        // if(isset($request->selected)) {
        //     foreach($request->selected as $field) {
        //         $fieldArray = explode('-', $field);
        //         if(count($fieldArray) > 1){
        //             $data = clone $fiDatosBasicos;
        //             foreach ($fieldArray as $value) {
        //                 $data = $data->$value;
        //             }
        //         }else {
        //             $data = $fiDatosBasicos->$field;
        //         }
        //         if(gettype($data) == 'object'){
        //             $fields[$field] = $this->contructColumnsOptions($data, array_keys($data->toArray()), []);
        //         }
        //     }
        // }
        // if(count($fields) == 0) {
        //     return response()->json(['newField' => false]);
        // } else{
        //     return response()->json(['newField' => true, 'fields' => $fields]);
        // }
        $sisTablas = SisTabla::select('id', 's_tabla')->whereIn('id', $request->selected)->get();
        foreach ($sisTablas as $key => $sisTabla) {
            $sisTablas[$key]->sis_tcampos = $sisTabla->sis_tcampos;
        }
        return $sisTablas;
    }

    /**
     * Construye las opciones de las tablas con los comentarios.
     * @param App\Models $model Modelo
     * @param array $modelColumns Columnas del modelo
     * @return array
     */
    public function contructColumnsOptions(object $model, array $modelColumns, array $columnsWithDescription = [])
    {
        // Obtenemos el nombre de la tabla.
        $tableName = $model->getTableName();
        // Recorremos las columnas o atributos del modelo
        foreach($modelColumns as $modelColumn)
        {
            // Obtenemos el comentario de la columna o atributo
            $comment = DB::select("SELECT COLUMN_NAME, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_NAME = '{$tableName}' AND COLUMN_NAME = '{$modelColumn}'")[0]->COLUMN_COMMENT;
            // Validamos si tiene o no comentario, en caso de no tener se le pasa un string con el nombre de la
            // tabla y la columna
            $modelColumnAsArray = explode('_', $modelColumn);
            if(!in_array('id', $modelColumnAsArray))
            {
                $columnsWithDescription[$modelColumn] = trim($comment) === '' ? "Tabla: {$tableName}, columna: {$modelColumn}" : $comment;
            }
        }
        // Verificamos si tiene relaciones, si las tiene unimos las relaciones con las columnas
        if(!empty($model->getTheRelations())) {
            $columnsWithDescription = array_merge($columnsWithDescription, $model->getTheRelations());
        }

        return $columnsWithDescription;
    }
}
