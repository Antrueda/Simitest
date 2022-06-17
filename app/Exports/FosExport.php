<?php

namespace App\Exports;


use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\fichaobservacion\FosDatosBasico;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class FosExport implements  FromView,ShouldAutoSize,WithStyles,WithTitle
{
    use Exportable;

    private $pestannas;
    private $dateinit;
    private $dateendx;
    private $upixxxxx;

    public function __construct($datafilter)
    {
       
        $this->padrexxx = $datafilter['id'];
        $this->padrexxz = $datafilter;
        
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('A2:H2')->getFont()->setBold(true)->getColor()->setARGB('c2c7d0');
        $sheet->getStyle('A2:H2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $sheet->getStyle('A2:H2')->getFill()->getStartColor()->setARGB('343a40');
        $sheet->getStyle('A2:H2')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
        $sheet->mergeCells('A1:H1');
        
    }
    public function title(): string
    {
        
        //return 'FICHAS DE OBSERVACIÓN DE'.$this->padrexxz->fi_datos_basico->NombreCedulas;
        return 'FICHAS DE OBSERVACIÓN';
    }

    public function view(): View
    {
        
        $nombrexx= $this->padrexxz->fi_datos_basico->NombreCedulas;
        $todoxxxx=FosDatosBasico::select(
            'fos_datos_basicos.id',
            'areas.nombre as areas',
            'fos_tses.nombre as seguimiento',
            'fos_stses.nombre as subseguimiento',
            'upi.nombre as upi',
            'fos_datos_basicos.d_fecha_diligencia',
            'fos_datos_basicos.s_observacion',
            'users.name as responsable',
            'sis_estas.s_estado',
            'fos_datos_basicos.sis_esta_id',
            'fos_datos_basicos.created_at',
            'fos_datos_basicos.sis_nnaj_id',
        )
            ->join('sis_estas', 'fos_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_depens as upi', 'fos_datos_basicos.sis_depen_id', '=', 'upi.id')
            ->join('users', 'fos_datos_basicos.i_responsable', '=', 'users.id')
            ->join('areas', 'fos_datos_basicos.area_id', '=', 'areas.id')
            ->join('fos_tses', 'fos_datos_basicos.fos_tse_id', '=', 'fos_tses.id')
            ->join('fos_stses', 'fos_datos_basicos.fos_stse_id', '=', 'fos_stses.id')
            ->where('fos_datos_basicos.sis_esta_id', 1)
            ->where('fos_datos_basicos.sis_nnaj_id', $this->padrexxx)->get();
            //ddd( $nombrexx);
        return view('administracion.Reportes.Excel.Formulario.fosnnaj',
        ['todoxxxx' => $todoxxxx],['padrexxx' => $nombrexx]);
        



    }
}
