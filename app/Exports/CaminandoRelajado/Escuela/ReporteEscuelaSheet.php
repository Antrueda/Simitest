<?php

namespace App\Exports\CaminandoRelajado\Escuela;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReporteEscuelaSheet implements FromView, ShouldAutoSize, WithStyles, WithTitle
{
    private $sisNnajs;

    public function __construct($sisNnajs)
    {
        $this->sisNnajs = $sisNnajs;
    }

    public function view(): View
    {
        return view('administracion.Reportes.Proyectos.export.CaminandoRelajado.Escuela.escuelaView', [
            'sisNnajs'      => $this->sisNnajs,
        ]);
    }

    public function title(): string
    {
        return '4. Escuela.';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('1')->getFont()->getColor()->setARGB('c2c7d0');
        $sheet->getStyle('1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('1')->getFill()->getStartColor()->setARGB('343a40');
    }

}
