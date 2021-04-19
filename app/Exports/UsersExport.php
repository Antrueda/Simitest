<?php

namespace App\Exports;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromView, ShouldAutoSize, WithStyles
{
    private $requestx;
    private $headersx;
    private $auxitabl;

    public function __construct($requestx, $headersx)
    {
        $this->requestx = $requestx;
        $this->headersx = $headersx;
        $this->auxitabl = [];
    }

    public function view(): View
    {
        $collecti = FiDatosBasico::whereYear('created_at', $this->requestx->yearxxxx)
        ->whereMonth('created_at', $this->requestx->monthxxx)->get();
        return view('administracion.Reportes.Proyectos.export.exportView', [
            'headersx' => $this->filterHeaders(),
            'collecti' => $collecti,
        ]);
    }

    private function filterHeaders()
    {
        $newHeade = [];
        if(!is_null($this->requestx->campcomm)) {
            foreach ($this->headersx as $keyxxxxx => $titlexxx) {
                if(in_array($keyxxxxx, $this->requestx->campcomm)){
                    $newHeade[$keyxxxxx] =  $titlexxx;
                }
            }
            return $newHeade;
        }else {
            return $this->headersx;
        }
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('1')->getFont()->getColor()->setARGB('c2c7d0');
        $sheet->getStyle('1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('1')->getFill()->getStartColor()->setARGB('343a40');
    }

    // fi_datos_basicos, nnaj_docus, nnaj_sexo, nnaj_nacimi, parametros
    // 1,2nombre 1,2apellido, sexo, fecha de nacimiento, documento y tipo de doc.

}
