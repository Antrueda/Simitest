<?php

namespace App\Exports;


use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\fichaobservacion\FosDatosBasico;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FosExport implements  FromView,ShouldAutoSize
{
    use Exportable;

    private $pestannas;
    private $dateinit;
    private $dateendx;
    private $upixxxxx;

    public function __construct($datafilter)
    {
       
        $this->padrexxx = $datafilter['id'];
        
    }

    public function view(): View
    {

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

        return view('administracion.Reportes.Excel.Formulario.fosnnaj',
        ['todoxxxx' => $todoxxxx]);



    }
}
