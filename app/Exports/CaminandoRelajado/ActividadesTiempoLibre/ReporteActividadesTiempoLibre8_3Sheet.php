<?php

namespace App\Exports\CaminandoRelajado\ActividadesTiempoLibre;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReporteActividadesTiempoLibre8_3Sheet implements FromView, ShouldAutoSize, WithStyles, WithTitle
{
    private $fiDatosBasicos;

    public function __construct($fiDatosBasicos)
    {
        $this->fiDatosBasicos = $fiDatosBasicos;
    }

    public function view(): View
    {
        return view('administracion.Reportes.Proyectos.export.CaminandoRelajado.ActividadesTiempoLibre.actividadesTiempoLibre8_3View', [
            'fiDatosBasicos'      => $this->fiDatosBasicos,
        ]);
    }

    public function title(): string
    {
        return '8.3 ¿Qué actividades realiza en su tiempo libre?';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('1')->getFont()->getColor()->setARGB('c2c7d0');
        $sheet->getStyle('1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('1')->getFill()->getStartColor()->setARGB('343a40');
    }

}
