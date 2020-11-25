<?php

namespace App\Exports;

use App\Models\fichaIngreso\FidatosBasico;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class FiDatosBasicoExport implements FromQuery
{
    use Exportable;

    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    // private $fileName = 'invoices.xlsx';

    /**
    * Optional Writer Type
    */
    // private $writerType = Excel::XLSX;

    /**
    * Optional headers
    */
    // private $headers = [
    //     'Content-Type' => 'text/csv',
    // ];


    public function query()
    {
        return FidatosBasico::all();
    }
}
