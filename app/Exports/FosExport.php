<?php

namespace app\Exports;


use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
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
        $this->pestannas = $datafilter['pestannas'] ?? [];
        $this->dateinit = $datafilter['dateinit'];
        $this->dateendx = $datafilter['dateendx'];
        $this->upixxxxx = $datafilter['upi'] ?? null;
        $this->estrateg = $datafilter['sisnnajx'];
    }

    public function view(): View
    {

        $todoxxxx=TrasladoNnaj::select([
            'traslado_nnajs.id',
            'traslado_nnajs.sis_nnaj_id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.id as fidatosbasicos',
            'tipodocu.nombre as tipodocu',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_sexos.s_nombre_identitario',
            'traslado_nnajs.observaciones',
            'traslado_nnajs.sis_esta_id',
            'nnaj_nacimis.d_nacimiento',
            'nnaj_docus.s_documento',
            'sis_estas.s_estado',
        ])
            ->join('sis_nnajs', 'traslado_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('traslados', 'traslado_nnajs.traslado_id', '=', 'traslados.id')
            ->join('sis_estas', 'traslados.sis_esta_id', '=', 'sis_estas.id')
            ->join('nnaj_docus', 'traslado_nnajs.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
            ->join('nnaj_nacimis', 'traslado_nnajs.sis_nnaj_id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('nnaj_sexos', 'traslado_nnajs.sis_nnaj_id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->where('traslado_nnajs.sis_esta_id', 1)
            ->where('traslado_nnajs.sis_nnaj_id', $this->sisnnajx)->orderBy('traslado_nnajs.id','ASC')
        // ->where('id','>',394)
        ->get();
        return view('administracion.Reportes.Excel.Formulario.traslado',
        ['todoxxxx' => $todoxxxx]);



    }
}
