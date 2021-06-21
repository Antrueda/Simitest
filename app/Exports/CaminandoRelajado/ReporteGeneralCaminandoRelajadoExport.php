<?php

namespace App\Exports\CaminandoRelajado;

// ini_set('memory_limit', '44M');
set_time_limit(1000);

use App\Exports\CaminandoRelajado\ActividadesTiempoLibre\ReporteActividadesTiempoLibreSheet;
use App\Exports\CaminandoRelajado\ActividadesTiempoLibre\ReporteActividadesTiempoLibre8_3Sheet;
use App\Exports\CaminandoRelajado\ActividadesTiempoLibre\ReporteActividadesTiempoLibre8_4_ASheet;
use App\Exports\CaminandoRelajado\ActividadesTiempoLibre\ReporteActividadesTiempoLibre8_8Sheet;
use App\Exports\CaminandoRelajado\ConsumoSPA\ReporteConsumoSPA11_1Sheet;
use App\Exports\CaminandoRelajado\ConsumoSPA\ReporteConsumoSPA11_2Sheet;
use App\Exports\CaminandoRelajado\ConsumoSPA\ReporteConsumoSPA11_3Sheet;
use App\Exports\CaminandoRelajado\Escuela\ReporteEscuela4_12Sheet;
use App\Exports\CaminandoRelajado\Escuela\ReporteEscuelaSheet;
use App\Exports\CaminandoRelajado\GeneracionIngresos\ReporteGeneracionIngresos7_3Sheet;
use App\Exports\CaminandoRelajado\GeneracionIngresos\ReporteGeneracionIngresosSheet;
use App\Exports\CaminandoRelajado\JusticiaRestaurativa\ReporteJusticiaRestaurativa10_4_ASheet;
use App\Exports\CaminandoRelajado\JusticiaRestaurativa\ReporteJusticiaRestaurativa10_5_ASheet;
use App\Exports\CaminandoRelajado\JusticiaRestaurativa\ReporteJusticiaRestaurativaSheet;
use App\Exports\CaminandoRelajado\RedesApoyo\ReporteRedesApoyo9_2Sheet;
use App\Exports\CaminandoRelajado\RedesApoyo\ReporteRedesApoyo9Sheet;
use App\Exports\CaminandoRelajado\Residencia\ReporteResidencia3_16Sheet;
use App\Exports\CaminandoRelajado\Residencia\ReporteResidenciaSheet;
use App\Exports\CaminandoRelajado\Salud\ReporteSalud6_12Sheet;
use App\Exports\CaminandoRelajado\Salud\ReporteSalud6_4_BSheet;
use App\Exports\CaminandoRelajado\Salud\ReporteSalud6_4_CSheet;
use App\Exports\CaminandoRelajado\Salud\ReporteSaludSheet;
use App\Exports\CaminandoRelajado\TipoPoblacion\ReporteTipoPoblacion13_1Sheet;
use App\Exports\CaminandoRelajado\TipoPoblacion\ReporteTipoPoblacion13_2Sheet;
use App\Exports\CaminandoRelajado\TipoPoblacion\ReporteTipoPoblacion13_3Sheet;
use App\Exports\CaminandoRelajado\TipoPoblacion\ReporteTipoPoblacionSheet;
use App\Exports\CaminandoRelajado\ViolenciaCondicionespecial\ReporteViolenciaCondicionEspecial12_1_BSheet;
use App\Exports\CaminandoRelajado\ViolenciaCondicionespecial\ReporteViolenciaCondicionEspecial12_2Sheet;
use App\Exports\CaminandoRelajado\ViolenciaCondicionespecial\ReporteViolenciaCondicionEspecialSheet;
use App\Models\fichaIngreso\FiDatosBasico;
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
        $this->pestannas = $datafilter['pestannas'] ?? [];
        $this->dateinit = $datafilter['dateinit'];
        $this->dateendx = $datafilter['dateendx'];
        $this->upixxxxx = $datafilter['upi'] ?? null;
        $this->estrateg = $datafilter['estrateg'];
    }

    public function sheets(): array
    {
        $fiDatosBasicos = FiDatosBasico::join('sis_nnajs', 'sis_nnajs.id', 'fi_datos_basicos.sis_nnaj_id')
        ->whereDate('sis_nnajs.created_at', '>=', $this->dateinit)
        ->whereDate('sis_nnajs.created_at', '<=', $this->dateendx)
        ->where('sis_nnajs.prm_escomfam_id', 227)
        ->where('fi_datos_basicos.prm_estrateg_id', $this->estrateg)
        ;

        if (!is_null($this->upixxxxx)) {
            $fiDatosBasicos = $fiDatosBasicos->join('nnaj_upis', 'nnaj_upis.sis_nnaj_id', 'sis_nnajs.id')->where('nnaj_upis.sis_depen_id', $this->upixxxxx);
        }

        $fiDatosBasicos = $fiDatosBasicos->get();

        $sheets = [];
        if (count($this->pestannas) == 0 || in_array(1, $this->pestannas)) {
            array_push($sheets, new ReporteInformacionBasicaSheet($fiDatosBasicos));
        }
        if (in_array(2, $this->pestannas)) {
            array_push($sheets, new ReporteResidenciaSheet($fiDatosBasicos));
            array_push($sheets, new ReporteResidencia3_16Sheet($fiDatosBasicos));
        }
        if (in_array(3, $this->pestannas)) {
            array_push($sheets, new ReporteEscuelaSheet($fiDatosBasicos));
            array_push($sheets, new ReporteEscuela4_12Sheet($fiDatosBasicos));
        }
        if (in_array(4, $this->pestannas)) {
            array_push($sheets, new ReporteSaludSheet($fiDatosBasicos));
            array_push($sheets, new ReporteSalud6_4_BSheet($fiDatosBasicos));
            array_push($sheets, new ReporteSalud6_4_CSheet($fiDatosBasicos));
            array_push($sheets, new ReporteSalud6_12Sheet($fiDatosBasicos));
        }
        if (in_array(5, $this->pestannas)) {
            array_push($sheets, new ReporteGeneracionIngresosSheet($fiDatosBasicos));
            array_push($sheets, new ReporteGeneracionIngresos7_3Sheet($fiDatosBasicos));
        }
        if (in_array(6, $this->pestannas)) {
            array_push($sheets, new ReporteActividadesTiempoLibreSheet($fiDatosBasicos));
            array_push($sheets, new ReporteActividadesTiempoLibre8_3Sheet($fiDatosBasicos));
            array_push($sheets, new ReporteActividadesTiempoLibre8_4_ASheet($fiDatosBasicos));
            array_push($sheets, new ReporteActividadesTiempoLibre8_8Sheet($fiDatosBasicos));
        }
        if (in_array(7, $this->pestannas)) {
            array_push($sheets, new ReporteRedesApoyo9Sheet($fiDatosBasicos));
            array_push($sheets, new ReporteRedesApoyo9_2Sheet($fiDatosBasicos));
        }
        if (in_array(8, $this->pestannas)) {
            array_push($sheets, new ReporteJusticiaRestaurativaSheet($fiDatosBasicos));
            array_push($sheets, new ReporteJusticiaRestaurativa10_4_ASheet($fiDatosBasicos));
            array_push($sheets, new ReporteJusticiaRestaurativa10_5_ASheet($fiDatosBasicos));
        }
        if (in_array(9, $this->pestannas)) {
            array_push($sheets, new ReporteConsumoSPA11_1Sheet($fiDatosBasicos));
            array_push($sheets, new ReporteConsumoSPA11_2Sheet($fiDatosBasicos));
            array_push($sheets, new ReporteConsumoSPA11_3Sheet($fiDatosBasicos));
        }
        if (in_array(10, $this->pestannas)) {
            array_push($sheets, new ReporteViolenciaCondicionEspecialSheet($fiDatosBasicos));
            array_push($sheets, new ReporteViolenciaCondicionEspecial12_1_BSheet($fiDatosBasicos));
            array_push($sheets, new ReporteViolenciaCondicionEspecial12_2Sheet($fiDatosBasicos));
        }
        if (in_array(11, $this->pestannas)) {
            array_push($sheets, new ReporteTipoPoblacionSheet($fiDatosBasicos));
            array_push($sheets, new ReporteTipoPoblacion13_1Sheet($fiDatosBasicos));
            array_push($sheets, new ReporteTipoPoblacion13_2Sheet($fiDatosBasicos));
            array_push($sheets, new ReporteTipoPoblacion13_3Sheet($fiDatosBasicos));
        }
        return $sheets;
        ini_set('memory_limit', '44M');
    }
}
