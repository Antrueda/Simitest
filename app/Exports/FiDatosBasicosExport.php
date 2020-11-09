<?php

namespace App\Exports;

use App\Models\fichaIngreso\FiDatosBasico;
use Maatwebsite\Excel\Concerns\FromCollection;

class FiDatosBasicosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FiDatosBasico::get();
    }
}
