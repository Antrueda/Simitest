<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsuariosExport implements  FromView,ShouldAutoSize
{
  
    public function view(): View
    {
        return view('administracion.Reportes.Excel.Formulario.usuarios',
        ['todoxxxx' => User::all()]);
    }
}
