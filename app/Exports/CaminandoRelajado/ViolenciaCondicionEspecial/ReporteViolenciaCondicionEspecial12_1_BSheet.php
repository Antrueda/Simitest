<?php

namespace app\Exports\CaminandoRelajado\ViolenciaCondicionespecial;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReporteViolenciaCondicionEspecial12_1_BSheet implements FromView, ShouldAutoSize, WithStyles, WithTitle
{
    private $fiDatosBasicos;

    public function __construct($fiDatosBasicos)
    {
        $this->fiDatosBasicos = $fiDatosBasicos;
    }

    public function view(): View
    {
        return view('administracion.Reportes.Proyectos.export.CaminandoRelajado.ViolenciaCondicionEspecial.violenciaCondicionEspecial12_1_BView', [
            'fiDatosBasicos'      => $this->fiDatosBasicos,
        ]);
    }

    public function title(): string
    {
        return '12.1.B Que tipo de presuntas lesiones ha cometido durante la actividad?.';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('1')->getFont()->getColor()->setARGB('c2c7d0');
        $sheet->getStyle('1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('1')->getFill()->getStartColor()->setARGB('343a40');
    }
}
