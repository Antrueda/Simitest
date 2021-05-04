<?php

namespace app\Exports;

use App\Models\Sistema\SisNnaj;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SisNnajExport implements  FromView,ShouldAutoSize
{
  
    public function view(): View
    {

        $todoxxxx=SisNnaj::
        where('prm_escomfam_id',227)->orderBy('id','ASC')
        // ->where('id','>',394)
        ->orderBy('id','ASC')
        ->get();
        return view('administracion.Reportes.Excel.Formulario.nnajxxxx',
        ['todoxxxx' => $todoxxxx]);
    }
}
