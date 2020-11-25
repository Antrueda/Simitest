<?php

namespace App\Exports;

use App\Models\fichaIngreso\FidatosBasico;
use Maatwebsite\Excel\Concerns\FromQuery;

class PruebaExport implements FromQuery
{
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    public function query()
    {
        return FidatosBasico::query();
    }
}
