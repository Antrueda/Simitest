<?php

namespace App\Exports\CaminandoRelajado;

use App\Models\Sistema\SisNnaj;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ReporteGeneralCaminandoRelajadoExport implements WithMultipleSheets
{
    use Exportable;

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

    public function sheets(): array
    {
        $sisNnajs = SisNnaj::join('fi_datos_basicos', 'fi_datos_basicos.sis_nnaj_id', 'sis_nnajs.id')->join('nnaj_upis', 'nnaj_upis.sis_nnaj_id', 'sis_nnajs.id')->where('nnaj_upis.sis_depen_id', $this->upixxxxx)->where('fi_datos_basicos.prm_tipoblaci_id', 2323)->whereDate('sis_nnajs.created_at', '>=', $this->dateinit)->whereDate('sis_nnajs.created_at', '<=', $this->dateendx)->get();

        $sheets = [];
        if (count($this->pestannas) == 0 || in_array(1, $this->pestannas)) {
            array_push($sheets, new ReporteInformacionBasicaSheet($sisNnajs));
        }
        if (in_array(2, $this->pestannas)) {
            array_push($sheets, new ReporteResidenciaSheet($sisNnajs));
        }
        if (in_array(3, $this->pestannas)) {
            array_push($sheets, new ReporteEscuelaSheet($sisNnajs));
        }
        if (in_array(4, $this->pestannas)) {
            array_push($sheets, new ReporteSaludSheet($sisNnajs));
        }
        if (in_array(5, $this->pestannas)) {
            array_push($sheets, new ReporteGeneracionIngresosSheet($sisNnajs));
        }
        if (in_array(6, $this->pestannas)) {
            array_push($sheets, new ReporteActividadesTiempoLibreSheet($sisNnajs));
        }
        if (in_array(7, $this->pestannas)) {
            array_push($sheets, new ReporteRedesApoyoSheet($sisNnajs));
        }
        if (in_array(8, $this->pestannas)) {
            array_push($sheets, new ReporteJusticiaRestaurativaSheet($sisNnajs));
        }
        if (in_array(9, $this->pestannas)) {
            array_push($sheets, new ReporteConsumoSPASheet($sisNnajs));
        }
        if (in_array(10, $this->pestannas)) {
            array_push($sheets, new ReporteViolenciaCondicionEspecialSheet($sisNnajs));
        }
        if (in_array(11, $this->pestannas)) {
            array_push($sheets, new ReporteTipoPoblacionSheet($sisNnajs));
        }
        return $sheets;

    }
}
