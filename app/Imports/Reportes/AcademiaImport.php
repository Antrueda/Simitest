<?php

namespace App\Imports\Reportes;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class AcademiaImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        echo '<pre>';
       print_r($row);
    }
}
