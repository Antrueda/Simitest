<?php

namespace App\Traits\Administracion\Reportes\Excel;

use App\Models\Sistema\SisTabla;
use App\Models\Sistema\SisTcampo;
use Illuminate\Http\Request;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait ArmarReporteTrait
{
    private $camposxx=[];
    public function getJoinParametros($dataxxxx)
    {

    }
    public function getReporteART($dataxxxx)
    {

        $mapRetaltions = [];
        $tables = SisTabla::whereIn('id', $dataxxxx['requestx']->sis_tabla_id)->get();
        foreach ($tables as $key => $tableName) { // recorrer tabla
            $fields = SisTcampo::where('sis_tabla_id', $tableName->id)->get();
            foreach ($fields as $key => $fieldName) { // recorrer campos tabla
                // campos relacionados con la tabla temacombo
                if ($fieldName->temacombo != null) {
                        $mapRetaltions[] = ['parametros', "parametros.id", strtolower("$tableName->s_tabla.$fieldName->s_campo")];
                } else { // campos relacionados con otras tabas o campos abiertos
                    // echo $fieldName->temacombo . ' lf<br>';
                }

                $fieldNameToArray = explode('_', $fieldName);
                // encontra los campos que tiene
                // if(count($fieldNameToArray) > 1 && in_array('id', $fieldNameToArray) && (!in_array('prm', $fieldNameToArray) || !in_array('parametro', $fieldNameToArray))) {
                //     $fieldToTable = str_replace('_id', 's', $fieldName);
                //     if(in_array($fieldToTable, array_values($tables))) {
                //         // dd($fieldToTable);
                //         $mapRetaltions[] = [$fieldToTable, "$fieldToTable.id", "$tableName.$fieldName"];
                //     }
                // } else if (count($fieldNameToArray) > 1 && in_array('id', $fieldNameToArray) && (in_array('prm', $fieldNameToArray) || in_array('parametro', $fieldNameToArray))) {
                //     $mapRetaltions[] = ['parametros', "parametros.id", "$tableName.$fieldName"];
                // }
            }
        }
    }
}
