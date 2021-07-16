<?php

namespace App\Exports;

use App\Models\Acciones\Grupales\Traslado\Traslado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TrasladojExport implements  FromView,ShouldAutoSize
{
  
    public function view(): View
    {

        $todoxxxx=Traslado::orderBy('id','ASC')
        // ->where('id','>',394)
        ->get();
        return view('administracion.Reportes.Excel.Formulario.traslado',
        ['todoxxxx' => $todoxxxx]);
    }
}
