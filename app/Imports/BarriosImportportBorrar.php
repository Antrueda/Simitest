<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class BarriosImportportBorrar implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {

        echo "SisUpz::create([
            'id' => $row[0],
            'sis_localidad_id' => ".(int)$row[2].",
            's_upz' => '$row[1]',
            's_codigo' => $row[0]]);<br>";
        // $barriosx = explode(',', $row[4]);
        // foreach ($barriosx as $value) {
        //     echo "SisBarrio::create([
        // 'sis_upz_id' => $row[0], 's_barrio' =>
        // '".str_replace('*',',',trim($value))."']);<br>";
        // }


    }
}
