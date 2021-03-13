<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\Simianti\Ge\GeCondicionesAmbiente;
use App\Models\Simianti\Ge\GeDirecciones;
use App\Models\Simianti\Ge\GeNnajDocumento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * realiza la comunicación entre las dos bases de datos=>'{$value->s_iso}'que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait ResidenciaTrait
{
    use HomologacionesTrait;
    public function getDireccionesCFT($request)
    {
        $document = GeNnajDocumento::select([
            //Direcciones

            'ge_direcciones.tipo_via_ppal as i_prm_tipo_via_id',
            'ge_direcciones.numero_via_ppal as s_nombre_via',
            'ge_direcciones.letra_via_ppal as i_prm_alfabeto_via_id',
            'ge_direcciones.bis_via_ppal as i_prm_tiene_bis_id',
            'ge_direcciones.letra_bis_via as i_prm_bis_alfabeto_id',
            'ge_direcciones.cuad_via_ppal as i_prm_cuadrante_vp_id',
            'ge_direcciones.numero_via_gral as i_via_generadora',
            'ge_direcciones.letra_via_gral as i_prm_alfabetico_vg_id',
            'ge_direcciones.numero_placa as i_placa_vg',
            'ge_direcciones.cuad_via_gral as i_prm_cuadrante_vg_id',
            'ge_direcciones.comple_text as s_complemento',
            'ge_direcciones.id_barrio as sis_upzbarri_id',
            'ge_direcciones.estrato_residencia as i_prm_estrato_id',
            'ge_direcciones.zona as i_prm_zona_direccion_id',
            'ge_direcciones.telefonos as s_telefono_uno',
            'ge_direcciones.celular_1 as s_telefono_dos',
            'ge_direcciones.celular_2 as s_telefono_tres',
            'ge_direcciones.email as s_email_facebook',
            'ge_direcciones.tipo_residencia as i_prm_tipo_duerme_id',
            'ge_direcciones.tiene_residencia as i_prm_tiene_dormir_id',
            'ge_direcciones.fecha_insercion',
            'ge_direcciones.tenencia as i_prm_tipo_tenencia_id',
            'ge_direcciones.id_tipo_dir as i_prm_tipo_direccion_id',
            'ge_direcciones.id_espacio_parcha as i_prm_espacio_parcha_id',
            'ge_direcciones.nombre_espacio as s_nombre_espacio_parcha',
            'ba_territorios.nombre',
            'ge_direcciones.id_direccion'
        ])
            ->where('ge_nnaj_documento.numero_documento', $request['padrexxx']->nnaj_docu->s_documento)
            ->join('ge_direcciones', 'ge_nnaj_documento.id_nnaj', '=', 'ge_direcciones.id_nnaj')
            ->join('ba_territorios', 'ge_direcciones.id_barrio', '=', 'ba_territorios.id')
            ->orderBy('ge_direcciones.fecha_insercion', 'DESC')
            ->first();
        return $document;
    }
    public function setResidencia($request)
    {
        $compfami = FiResidencia::where('sis_nnaj_id', $request['padrexxx']->sis_nnaj_id)->first();
        if (!isset($compfami->id)) {
            $dataxxxx = $this->getDireccionesCFT($request);
            

            if ($dataxxxx != null) {
                $dataxxxx->s_telefono_uno = $dataxxxx->s_telefono_uno . ' ' . $dataxxxx->celular1 . ' ' . $dataxxxx->celular1;
                $dataxxxx->i_prm_tipo_via_id = $this->getParametrosSimiMultivalor(
                    [
                        'codigoxx' => $dataxxxx->i_prm_tipo_via_id,
                        'tablaxxx' => 'TIPO_VIA_PPAL',
                        'temaxxxx' => 62,
                        'testerxx' => false
                    ]
                )->id;
                $dataxxxx->i_prm_espacio_parcha_id = $this->getParametrosSimiMultivalor(
                    [
                        'codigoxx' => $dataxxxx->i_prm_espacio_parcha_id,
                        'tablaxxx' => 'ESPACIOSPARCHA',
                        'temaxxxx' => 291,
                        'testerxx' => false
                    ]
                )->id;
                $dataxxxx->i_prm_tipo_direccion_id = $this->getParametrosSimiMultivalor(
                    [
                        'codigoxx' => $dataxxxx->i_prm_tipo_direccion_id,
                        'tablaxxx' => 'TIPODIR',
                        'temaxxxx' => 36,
                        'testerxx' => false
                    ]
                )->id;
                $dataxxxx->i_prm_tipo_tenencia_id = $this->getParametrosSimiMultivalor(
                    [
                        'codigoxx' => $dataxxxx->i_prm_tipo_tenencia_id,
                        'tablaxxx' => 'TENENCIA_VIVIENDA',
                        'temaxxxx' => 35,
                        'testerxx' => false
                    ]
                )->id;
               
                if ($dataxxxx->i_prm_alfabeto_via_id != null) {
                    $dataxxxx->i_prm_alfabeto_via_id = $this->getParametrosSimi(['codigoxx' => $dataxxxx->i_prm_alfabeto_via_id, 'temaxxxx' => 39])->id;
                }
            
                if ($dataxxxx->i_prm_bis_alfabeto_id != null) {
                    $dataxxxx->i_prm_bis_alfabeto_id = $this->getParametrosSimi(['codigoxx' => $dataxxxx->i_prm_bis_alfabeto_id, 'temaxxxx' => 39])->id;
                }
                if ($dataxxxx->i_prm_cuadrante_vp_id != null) {
                    $dataxxxx->i_prm_cuadrante_vp_id = $this->getParametrosSimiMultivalor(
                        [
                            'codigoxx' => $dataxxxx->i_prm_cuadrante_vp_id,
                            'tablaxxx' => 'CUADRANTE',
                            'temaxxxx' => 38,
                            'testerxx' => false
                        ]
                    )->id;
                }
                if ($dataxxxx->i_prm_alfabetico_vg_id != null) {
                    $dataxxxx->i_prm_alfabetico_vg_id = $this->getParametrosSimi(['codigoxx' => $dataxxxx->i_prm_alfabetico_vg_id, 'temaxxxx' => 39])->id;
                }
               
             
                    $dataxxxx->i_prm_cuadrante_vg_id = $this->getParametrosSimiMultivalor(
                        [
                            'codigoxx' => $dataxxxx->i_prm_cuadrante_vg_id,
                            'tablaxxx' => 'CUADRANTE',
                            'temaxxxx' => 38,
                            'testerxx' => false
                        ]
                    )->id;
                
                $dataxxxx->i_prm_estrato_id = $this->getParametrosSimiMultivalor(
                    [
                        'codigoxx' => $dataxxxx->i_prm_estrato_id,
                        'tablaxxx' => 'ESTRATO',
                        'temaxxxx' => 41,
                        'testerxx' => false
                    ]
                )->id;
                $dataxxxx->i_prm_zona_direccion_id = $this->getParametrosSimiMultivalor(
                    [
                        'codigoxx' => $dataxxxx->i_prm_zona_direccion_id,
                        'tablaxxx' => 'ZONA_VIVIENDA',
                        'temaxxxx' => 37,
                        'testerxx' => false
                    ]
                )->id;
                $dataxxxx->i_prm_tipo_duerme_id = $this->getParametrosSimiMultivalor(
                    [
                        'codigoxx' => $dataxxxx->i_prm_tipo_duerme_id,
                        'tablaxxx' => 'TIPORESIDENCIA',
                        'temaxxxx' => 34,
                        'testerxx' => false
                    ]
                )->id;
             
                $dataxxxx->i_prm_tiene_bis_id = $this->getParametrosSimi(['codigoxx' => $dataxxxx->i_prm_tiene_bis_id, 'temaxxxx' => 23])->id;
               
                $dataxxxx->i_prm_tiene_dormir_id = $this->getParametrosSimi(['codigoxx' => $dataxxxx->i_prm_tiene_dormir_id, 'temaxxxx' => 23])->id;
                
                $locabari = $this->getBarrio(['idbarrio' => $dataxxxx->sis_upzbarri_id]);
                $dataxxxx->sis_upzbarri_id = $locabari->id;
                $dataxxxx->sis_nnaj_id = $request['padrexxx']->sis_nnaj_id;
                $dataxxxx->sis_localidad_id = $locabari->sis_localupz->sis_localidad_id;
                $dataxxxx->sis_upz_id = $locabari->sis_localupz->id;
                $compfami = $this->getTransaccionRT($dataxxxx, $compfami);
            }
        }
       
        return $compfami;
    }
    public function getTransaccionRT($dataxxxx, $objetoxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            if ($objetoxx == null) {
                $objetoxx = FiResidencia::create($dataxxxx->toArray());
            }
            $ambiente = GeCondicionesAmbiente::select('id_tipo_condicion')->where('id_direccion', $dataxxxx->id_direccion)->get();
            foreach ($ambiente as $ambientx) {
                $registro = $this->getParametrosSimiMultivalor(['codigoxx' => $ambientx->id_tipo_condicion, 'temaxxxx' => 42, 'tablaxxx' => 'CONDICIONAMBIENTE', 'testerxx' => true])->id;
                $condicio = FiCondicionAmbiente::where('fi_residencia_id', $objetoxx->id)->where('i_prm_condicion_amb_id', $registro)->first();
                if ($condicio == null) {
                    $condicio =     FiCondicionAmbiente::create([
                        'fi_residencia_id' => $objetoxx->id,
                        'i_prm_condicion_amb_id' => $registro,
                        'user_crea_id' => Auth::user()->id,
                        'user_edita_id' => Auth::user()->id,
                        'sis_esta_id' => 1,
                    ]);
                }
            }
            
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }
}
