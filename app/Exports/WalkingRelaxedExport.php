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
    private $pestannas;
    private $dateinit;
    private $dateendx;
    private $upixxxxx;

    public function __construct($datafilter)
    {
        $this->pestannas = $datafilter['pestannas'];
        $this->dateinit = $datafilter['dateinit'];
        $this->dateendx = $datafilter['dateendx'];
        $this->upixxxxx = $datafilter['upi'];
    }

    public function view(): View
    {
        $sisNnajs = SisNnaj::join('fi_datos_basicos', 'fi_datos_basicos.sis_nnaj_id', 'sis_nnajs.id')->join('nnaj_upis', 'nnaj_upis.sis_nnaj_id', 'sis_nnajs.id')->where('nnaj_upis.sis_depen_id', $this->upixxxxx)->where('fi_datos_basicos.prm_tipoblaci_id', 2323)->whereDate('sis_nnajs.created_at', '>=', $this->dateinit)->whereDate('sis_nnajs.created_at', '<=', $this->dateendx)->get();

        return view('administracion.Reportes.Proyectos.export.walkingRelaxedExportView', [
            'sisNnajs'      => $sisNnajs,
            'pestannas'      => $this->pestannas
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
