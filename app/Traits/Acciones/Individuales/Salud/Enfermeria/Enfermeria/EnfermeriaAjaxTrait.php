<?php

namespace App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria;

use App\Models\Acciones\Grupales\Asistencias\Semanal\AsisSema;
use App\Models\Acciones\Grupales\Asistencias\Semanal\AsissemaAsisten;
use App\Models\Acciones\Grupales\Asistencias\Semanal\AsissemaMatricula;
use App\Models\Acciones\Individuales\Salud\Enfermeria\Enfermeria;
use App\Models\Parametro;
use App\Models\sistema\SisDepen;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait EnfermeriaAjaxTrait
{
 /**
     * combo para los servicios de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getServiciosUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx
        ];
        $respuest = response()->json($this->getServiciosUpiComboCT($dataxxxx));
        return $respuest;
    }

    public function setPaginaGrupos($dataxxxx)
    {
        $respuest = [
            'emptyxxx' => '#prm_especial',
        //    'readonid' => '#numepagi',
         //   'readonly' => true,
            'valuexxx' => '',
            'combosxx' => [
                ['comboxxx' => [], 'selectid' => 'prm_especial'],
            ]
        ];

        switch ($dataxxxx['progacti']) {

               // Si se selecciona acompañamiento y apoyos diagnosticos, se debe seleccionar el otro select
            case '1339': // muestra combo de grupos e inactiva páginas
                $respuest['combosxx'][0]['comboxxx'] = $this->getTemacomboCT([
                    'temaxxxx' => 458,
                    'cabecera' => false,
                  //  'notinxxx' => [146, 147, 294],
                    'ajaxxxxx' => $dataxxxx['ajaxxxxx']
                ])['comboxxx'];
                $respuest['readonly'] = false;
                break;
            case '2689': // activa páginas y mustrar no aplica en el combo de grupos 2766
                $respuest['combosxx'][0]['comboxxx'] = $this->getTemacomboCT([
                    'temaxxxx' => 430,
                    'notinxxx' => [235],
                    'ajaxxxxx' => $dataxxxx['ajaxxxxx']
                ])['comboxxx'];

                break;
        }
        return $respuest;
    }

   
    public function getActividad(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipoacti' => $request->tipoacti,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;
        $respuest = response()->json($this->getActividadAsignar($dataxxxx));
        return $respuest;
    }




    public function getFechaPuede(Request $request)
    {
        $puedecar = $this->getPuedeCargar([
            'estoyenx' => 2,
            'fechregi' => date('Y-m-d'),
            'upixxxxx' => $request->dependex,
            'formular' => 2,
        ]);

        $respuest = response()->json($puedecar);
        return $respuest;
    }
}
