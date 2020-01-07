<?php

namespace App\Helpers\Indicadores;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLineaBase;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InValoracion;
use App\Models\Indicadores\InRespuesta;
use App\Models\sistema\SisTabla;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IndicadorHelper
{
    private  $indicado;
    public function __construct()
    {
    }
    public function getIndicado($indicador)
    {
        return [

            'cantindi' => 0,
            'indicado' => $indicador->s_indicador,
            'cantdocu' => 0,
            'iavacate' => '',
            'iavanive' => '',
            'iavancex' => '',
            'iaccionx' => '',

            'document' => $indicador->sdocumen,
            'cantbase' => 0,
            'linebase' => $indicador->slinbase,
            'cantacti' => 0,
            'sactivid' => $indicador->sactivid,
            'iporcent' => $indicador->iporcent,
            'itiempox' => $indicador->itiempox . ' ' . $indicador->stiempox,
            'cantsopo' => 0,
            'soportex' => $indicador->soportex,
            'cantpreg' => 0,
            'pregunta' => $indicador->spregunt,
            'nivelxxx' => ($indicador->scatagor > 0 && $indicador->scatagor < 4) ? 'BAJO' : ($indicador->scatagor > 3 && $indicador->scatagor < 7) ? 'MEDIO' : 'ALTO',
            'categori' => $indicador->scatagor,
            'avancex1' => '',
            'avancex2' => '',
            'avancex3' => '',
            'avancex4' => '',
            'avancex5' => '',
            'avancex6' => '',
            'avancex7' => '',
            'avancex8' => '',
            'avancex9' => '',
        ];
    }
    public static function holamundo()
    {
        echo 'hola mundo desde el helper';
    }
    public static function disparador($tablaidx)
    {
        foreach (InDocPregunta::where('sis_tabla_id', $tablaidx)->get() as $docupreg) {
            DB::table($docupreg->sis_tabla->s_tabla)->select($docupreg->sis_campo_tabla->s_campo . 's')->get();
        }
    }
    public function getLineaBaseNnaj($dataxxxx)
    {
    }
    /**
     * saber a que instrumento sele está disparnado el indicador
     */
    private static function getInstrumentos($dataxxxx)
    {
        switch ($dataxxxx['instrume']) {
            case 1: // Ficha de ingreso FI
                break;
            case 2: // Consulta Social en Domicilio CSD
                break;
            case 3: // Valoracion Sicosocial Inicial VSI
                break;
                // se pueden agregar los instrumentos que se requieran en los indicadores
        }
    }
    public static function asignaLineaBase($dataxxxx)
    {
        /**
         *  saber si la respuesta es una array ok 
         *  verificar si la respuesta existe en la tabla in_respuestas   ok 
         *  debo saber de que instrumento vienen los datos y de que item 
         * 
         *  */


        /**
         * encontrar todas las linea fuente asociadas la tabla
         */
        $docupreg = InDocPregunta::where('sis_tabla_id', $dataxxxx['sis_tabla_id'])
            ->get();
        $baseline = [];
        foreach ($docupreg as $linebase) {
            $lineaxxx = $linebase->in_base_fuente->in_fuente_id;
            if (!in_array($lineaxxx, $baseline)) {
                $baseline[] = $lineaxxx;
            }
        }
        
        foreach (InBaseFuente::whereIn('in_base_fuentes.in_fuente_id', $baseline)->get() as $basefuent) {
            $actibase = true;
            $tablaxxx = 0;
            $consulta = []; 
            foreach ($basefuent->in_doc_preguntas as $docupreg) {

                $campoxxx = $docupreg->sis_campo_tabla->s_campo;
                /**
                 * Solo realizar una vez la consulta
                 */
                if ($tablaxxx != $docupreg->sis_tabla_id) {
                    $tablaxxx = $docupreg->sis_tabla_id;
                    /**
                     * traer el registro almacendo en la tabla encontrada
                     */
                    $consulta = DB::table($docupreg->sis_tabla->s_tabla)->first();
                }
                $respuest = InRespuesta::where('i_prm_respuesta_id', $consulta->$campoxxx)->first();
                /**
                 * validar que si se puede activar la linea base
                 */
                if (!isset($respuest->id)) {
                    $actibase = false;
                }
            }
            /**
             * activar linae base
             */
            if ($actibase) {
               
                /**
                 * verificar 
                 */
                $nnajbase = InLineabaseNnaj::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])
                    ->where('in_fuente_id', $basefuent->in_fuente_id)
                    ->first();
                if (!isset($nnajbase->id)) {
                    InLineabaseNnaj::create([
                        'in_fuente_id' => $basefuent->in_fuente_id,
                        'sis_nnaj_id' => $dataxxxx['sis_nnaj_id'],
                        'user_crea_id' => $dataxxxx['user_crea_id'],
                        'user_edita_id' => $dataxxxx['user_edita_id'],
                        'activo' => 1,
                    ]);
                }
            }
        }





        //return $sistabla;
    }
    public static function getDiasEntreFecha($fechaxx1, $fechaxx2)
    {
        return Carbon::parse($fechaxx1)->floatDiffInDays($fechaxx2);
    }
    public static function setDiasTranscurridos($nnajidxx)
    {
        $datobasi = FiDatosBasico::where('sis_nnaj_id', $nnajidxx)->where('i_prm_linea_base_id', 227)->first();
        return IndicadorHelper::getDiasEntreFecha(explode(' ', $datobasi->created_at)[0], date('Y-m-d', time()));;
    }
    private function documento($iddocume, $indicador, $key)
    {
        $idlinbas = '';
        if ($iddocume != $indicador->idocfuen) {
            $idlinbas = $indicador->sdocumen;
            $indicado[$key]['cantdocu'] = 1;
        } else {
            $indicado[$key]['cantdocu'] += 1;
        }
        return [$idlinbas, $indicado[$key]['cantdocu']];
    }
    public function getAcciones($valoavan)
    {
        $iaccionx = '';
        switch ($valoavan->i_prm_avance_id) {
            case 512:
                $iaccionx = 'AUMENTA DE NIVEL';
                break;
            case 514:
                $iaccionx = 'AUMENTA DE CATEGORÍA';
                break;
            case 559:
                $iaccionx = 'MANTIENE EL NIVEL Y CATEGORÍA';
                break;
            case 1668:
                $iaccionx = 'DISMINUYE DE NIVEL';
                break;
        }
        return $iaccionx;
    }
    //['antiguox'=>'','nuevoxxx'=>'','indicado'=>'','linetota'=>'','posicion'=>'','cantidad'=>'',]
    public function getValidacion($dataxxxx)
    {
        $posicion = ($dataxxxx['indicado']['linetota'] == 0) ? 0 : ($dataxxxx['indicado']['linetota'] - $dataxxxx['indicado'][$dataxxxx['posicion']]);
        if ($dataxxxx['indicado'][$dataxxxx['antiguox']] != $dataxxxx['nuevoxxx']) {
            $dataxxxx['indicado'][$dataxxxx['antiguox']] = $dataxxxx['nuevoxxx'];
            if ($dataxxxx['cantidad'] == 'cantbase' && $dataxxxx['indicado']['idlinbas'] > 0) {
                $valoavan = InValoracion::getAvance(['idlinbas' => $dataxxxx['indicado']['idlinbas']]);
                $indicado['indicado'][$posicion]['iavacate'] = $valoavan->iavacate;
                $indicado['indicado'][$posicion]['iavanive'] = ($indicado['indicado'][$posicion]['iavacate'] > 0 &&  $indicado['indicado'][$posicion]['iavacate'] < 4) ? 'BAJO' : ($indicado['indicado'][$posicion]['iavacate'] > 3 &&  $indicado['indicado'][$posicion]['iavacate'] < 7) ? 'MEDIO' : 'ALTO';
                $indicado['indicado'][$posicion]['iavancex'] = $valoavan->iavancex;
                $indicado['indicado'][$posicion]['iaccionx'] = $dataxxxx['indihelp']->getAcciones($valoavan);
            }
            $dataxxxx['indicado']['indicado'][$posicion][$dataxxxx['cantidad']] = $dataxxxx['indicado'][$dataxxxx['posicion']];
            $dataxxxx['indicado'][$dataxxxx['posicion']] = 1;
        } else {
            $dataxxxx['indicado'][$dataxxxx['posicion']]++;
        }
        if ($dataxxxx['keyxxxxx'] == $dataxxxx['totalxxx'] - 1) {
            $dataxxxx['indicado']['indicado'][($dataxxxx['indicado']['linetota'] - $dataxxxx['indicado'][$dataxxxx['posicion']]) + 1][$dataxxxx['cantidad']] = $dataxxxx['indicado'][$dataxxxx['posicion']];
        }
        return $dataxxxx;
    }
    public function getAcumuladores()
    {
        return [
            'indicado' => [],
            'idindica' => 0,
            'indicont' => 0,
            'idlinbas' => 0,
            'idactivi' => 0,
            'linetota' => 0,
            'linebase' => 0,
            'totadocu' => 0,
            'totactiv' => 0,
            'iddocume' => 0,
            'idsoport' => 0,
            'totasopo' => 0,
            'idpregun' => 0,
            'totapreg' => 0,
        ];
    }
    public static function getIndicadores($nnajidxx, $areaidxx)
    {
        $indihelp = new IndicadorHelper();
        $inindica = InIndicador::getConsulta(['nnajidxx' => $nnajidxx]);
        $indicado = $indihelp->getAcumuladores();
        $totalxxx = count($inindica);
        foreach ($inindica as $key => $indicador) {
            $indicado['indicado'][$key] = $indihelp->getIndicado($indicador);
            $repuesta = $indihelp->getValidacion([
                'antiguox' => 'idindica', 'nuevoxxx' => $indicador->id, 'keyxxxxx' => $key, 'totalxxx' => $totalxxx,
                'indicado' => $indicado, 'posicion' => 'indicont', 'cantidad' => 'cantindi', 'indihelp' => $indihelp
            ]);
            $indicado = $repuesta['indicado'];
            $repuesta = $indihelp->getValidacion([
                'antiguox' => 'idlinbas', 'nuevoxxx' => $indicador->idlinbas, 'keyxxxxx' => $key, 'totalxxx' => $totalxxx,
                'indicado' => $indicado, 'posicion' => 'linebase', 'cantidad' => 'cantbase', 'indihelp' => $indihelp
            ]);
            $indicado = $repuesta['indicado'];
            $repuesta = $indihelp->getValidacion([
                'antiguox' => 'idactivi', 'nuevoxxx' => $indicador->idactivi, 'keyxxxxx' => $key, 'totalxxx' => $totalxxx,
                'indicado' => $indicado, 'posicion' => 'totactiv', 'cantidad' => 'cantacti', 'indihelp' => $indihelp
            ]);
            $indicado = $repuesta['indicado'];
            $repuesta = $indihelp->getValidacion([
                'antiguox' => 'idsoport', 'nuevoxxx' => $indicador->idsoport, 'keyxxxxx' => $key, 'totalxxx' => $totalxxx,
                'indicado' => $indicado, 'posicion' => 'totasopo', 'cantidad' => 'cantsopo', 'indihelp' => $indihelp
            ]);
            $indicado = $repuesta['indicado'];
            $repuesta = $indihelp->getValidacion([
                'antiguox' => 'iddocume', 'nuevoxxx' => $indicador->idocfuen, 'keyxxxxx' => $key, 'totalxxx' => $totalxxx,
                'indicado' => $indicado, 'posicion' => 'totadocu', 'cantidad' => 'cantdocu', 'indihelp' => $indihelp
            ]);
            $indicado = $repuesta['indicado'];
            $repuesta = $indihelp->getValidacion([
                'antiguox' => 'idpregun', 'nuevoxxx' => $indicador->idpregun, 'keyxxxxx' => $key, 'totalxxx' => $totalxxx,
                'indicado' => $indicado, 'posicion' => 'totapreg', 'cantidad' => 'cantpreg', 'indihelp' => $indihelp
            ]);
            $indicado = $repuesta['indicado'];
            $indicado['linetota']++;
        }
        //ddd($indicado);
        return $indicado['indicado'];
    }
}
