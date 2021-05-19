<?php

namespace App\Exports;

use App\Models\Sistema\SisNnaj;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class WalkingRelaxedExport implements FromView, ShouldAutoSize, WithStyles
{
    public function view(): View
    {
        $sisNnajs = SisNnaj::all();
        return view('administracion.Reportes.Proyectos.export.walkingRelaxedExportView', [
            'sisNnajs'      => $sisNnajs,
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('1')->getFont()->getColor()->setARGB('c2c7d0');
        $sheet->getStyle('1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('1')->getFill()->getStartColor()->setARGB('343a40');
    }
}
