<?php

namespace App\Traits\Interfaz;

use App\Models\Parametro;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisUpzbarri;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

/**
 * realizar migagraciones del simi anterior al nuevo desarrollo
 */
trait MigrarSimiANuevoTrait
{
    public function getBarrio($idxxxxxx)
    {
        // concer el barrio asignado al nnaj en el antiguo simi
        $fiaceing = Http::get($this->getUrl() . 'fiaceing/barrioxx/' . $idxxxxxx)->json();
        // conocer datos del barrio en el antiguo simi
        $barrioxx = Http::get($this->getUrl() . 'territorios/barrioxx/' . $fiaceing)->json();
        // conocer la upz en el nuevo desarrollo
        $sisupzxx = SisUpz::where('simianti_id', $barrioxx['idpadrex'])->first();
        // saber si el barrio asignado al nnaj en el simi ya se encuentra en el nuevo desarrollo
        $departam = SisBarrio::where('s_barrio', $barrioxx['nombrexx'])->first();
        $respuest = [];
        // se crea el barrio
        if (!isset($departam->id)) {
            // se crea el barrio en el nuevo desarrollo
            $barrioxy = SisBarrio::create(['s_barrio' => $barrioxx['nombrexx'],  'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
            // se asocia el barrio con la upz
            $respuest = SisUpzbarri::create(['sis_localupz_id' => $sisupzxx->sis_localupz->id, 'sis_barrio_id' => $barrioxy->id,  'simianti_id' => $barrioxx['idxxxxxx'], 'sis_esta_id' => 1, 'user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
        } else {
            // saber si el barrio y la upz ya se encuentran asociados
            $respuest = SisUpzbarri::where('sis_localupz_id', $sisupzxx->sis_localupz->id)->where('sis_barrio_id', $departam->id)->first();
            // se crea la union del barrio con la upz
            if (!isset($respuest->id)) {
                SisUpzbarri::create(['sis_localupz_id' => $sisupzxx->sis_localupz->id, 'sis_barrio_id' => $departam->id,  'simianti_id' => $barrioxx['idxxxxxx'], 'sis_esta_id' => 1, 'user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
                // el barrio y la upz se encuentran asociados pero no tienen el id del simi antiguo
            } else if ($respuest->simianti_id == 0) {
                $respuest->update(['simianti_id' => $barrioxx['idxxxxxx']]);
            }
        }
        return $respuest;
    }
    /**
     * validar parametro que se encuentra que no es multivalor
     *
     * @param array $dataxxxx array que contiene los datos para realizar la validación del parametro
     * @return $parametr parametro resultado de la validación
     */
    public function getParametrosSimi($dataxxxx)
    {
        $parametr = Parametro::where('nombre', $dataxxxx['codigoxx'])->first();
        // se crea el parametro y se asocia con el tema
        $parametr = $this->getValidarParametro($parametr, $dataxxxx, false, 0);
        return $parametr;
    }
    /**
     * asociar el tema con el parámetro
     *
     * @param object $temaxxxx tema que se asocia
     * @param object $parametr parametro que se asocia
     * @param @param string $parasimi identificador asociado en el antiguo simi
     * @return void
     */
    public function getAsociarParametro($temaxxxx, $parametr, $simianti)
    {
        $temaxxxx->parametros()->attach($parametr, [
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'simianti_id' => $simianti
        ]);
    }
    /**
     * valida la asociación de un tema con un parametro y actualiza el campo simianti_id
     *
     * @param model $temaxxxx tema al que se le asocia el parametro
     * @param model $parametr parametro que se asocia con el tema
     * @param string $parasimi identificador asociado en el antiguo simi
     * @param boolean $actualiz false le indica que no se debe actualizar simianti_id
     * @return $parametr
     */
    public function getActualizarParametroTema($temaxxxx, $parametr, $parasimi, $actualiz)
    {
        $temapara = $temaxxxx->parametros()->where('parametro_id', $parametr->id)->first();
        // no está asociado el parametro con el tema
        if (!isset($temapara->pivot->parametro_id)) {
            $parametr =  Parametro::find($parametr);
            $this->getAsociarParametro($temaxxxx, $parametr, 0);
        }
        // se actualiza el id del simi antiguo
        else {
            // se actualizan los parámetos que viene de la tabla sis_multivalores del antiguo simi
            if ($actualiz && $temapara->pivot->simianti_id == 0 && ($parametr->id != 2502 || $parametr->id != 2503)) {
                $temapara->pivot->update(['simianti_id' => $parasimi]);
            }
        }
        return $parametr;
    }
    /**
     * obtiene el parametro que se va asignar
     *
     * @param object $parametr parametro que se va asociar
     * @param array $dataxxxx información que permite realizar la validación para obtener el parámetro
     * @param boolean $actualiz axiliar que recibe el método getAsociarParametro
     * @param string $parasimi
     * @return void
     */
    public function getValidarParametro($parametr, $dataxxxx, $actualiz, $parasimi)
    {
        // buscar el tema al que se le va a sociar el parametro del antiguo desarrollo
        $temaxxxx = Tema::where('id', $dataxxxx['temaxxxx'])->first();
        if (!isset($parametr->id)) {
            if ($dataxxxx['codigoxx'] == '') { // viene del simi atiguo vacío
                $parametr =  Parametro::find(2503);
            } else { // no está creado el parametro en el actual desarollo
                $parametr =  Parametro::find(2502);
            }
            $asociarx = $temaxxxx->parametros()->where('parametro_id', $parametr->id)->first();
            // asocia el parametro
            if (!isset($asociarx->pivot->parametro_id)) {
                $this->getAsociarParametro($temaxxxx, $parametr, $parasimi);
            }
        } else {
            $this->getActualizarParametroTema($temaxxxx, $parametr, $parasimi, $actualiz,);
        }
        return $parametr;
    }
    /**
     * validar parametro tarido de la tabla sis_multivalores
     *
     * @param array $dataxxxx array que contiene los datos para realizar la validación del parametro
     * @return $parametr parametro resultado de la validación
     */
    public function getParametrosSimiMultivalor($dataxxxx)
    {
        $parametr = [];
        $parasimi = ['codigoxx' => 0];
        if ($dataxxxx['codigoxx'] != '') {
            // buscar el parametro en el antiguo desarrollo
            $parasimi = Http::get($this->getUrl() . "multivalores/registro/{$dataxxxx['tablaxxx']}/{$dataxxxx['codigoxx']}")->json();
            // buscar el parametro en el nuevo desarrollo
            $parametr = Parametro::where('nombre', $parasimi['descripc'])->first();
        }
        // se crea el parametro y se asocia con el tema
        $parametr = $this->getValidarParametro($parametr, $dataxxxx, true, $parasimi['codigoxx']);
        return $parametr;
    }
    public function getMunicipoSimi($dataxxxx)
    {
        $parasimi = Http::get($this->getUrl() . "multivalores/registro/{$dataxxxx['tablaxxx']}/{$dataxxxx['codigoxx']}")->json();
    }
    public function getUpiSimi($dataxxxx)
    {


        $variable=SisDepartam::select('id','sis_pai_id')->get();
        foreach ($variable as $key => $value) {
            # code...
        }
        // buscar la upi en el antiguo desarrollo
        $upisimix = (object)Http::get($this->getUrl() . "upisxxxx/registro/{$dataxxxx['idupixxx']}")->json();
        // buscar la upi en el nuevo desarrollo
        $upinuevo = SisDepen::where('nombre', 'upi ejercicio')->first();
        // $upinuevo = SisDepen::where('nombre', $upisimix->nombrexx)->first();

        // se crea la upi y se asocia con el tema
        if (!isset($upinuevo->id)) {
            $dataupix = [
                'nombre' => $upisimix->nombrexx,
                'i_prm_cvital_id' => $this->getParametrosSimiMultivalor(['tablaxxx' => 'CICLO_VITAL', 'codigoxx' => $upisimix->ciclvita, 'temaxxxx' => 311])->id,
                'i_prm_tdependen_id' => $this->getParametrosSimi(['codigoxx' => $upisimix->tipodepe, 'temaxxxx' => 192])->id,
                'i_prm_sexo_id' => $this->getParametrosSimiMultivalor(['tablaxxx' => 'SEXO_UPI', 'codigoxx' => $upisimix->sexoxxxx, 'temaxxxx' => 339])->id,
                's_direccion' => $upisimix->direccio,
                'sis_departam_id' => '',
                'sis_municipio_id' => '',
                'estusuario_id' => 25,
                'simianti_id' => $upisimix->idxxxxxx,
                'sis_upzbarri_id' => '',
                's_telefono' => $upisimix->telefono,
                's_correo' => $upisimix->emailxxx,
                'itiestan' => 10,
                'itiegabe' => 0,
                'itigafin' => 0,
                'sis_esta_id' => 1,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ];
            ddd($dataupix);
            $upinuevo = SisDepen::create($dataupix);
        }
        //else{
        //     $temapara = $temaxxxx->parametros()->where('parametro_id',$parametr->id)->first();
        //     // se asocia el tema con la upi
        //     if(!isset($temapara->parametro_id)){
        //         $temaxxxx->parametros()->attach($parametr,['user_crea_id' => 1, 'user_edita_id' => 1,'simianti'=>$parasimi['codigoxx']]);
        //     }else
        //     // se le actualiza la upi del antiguo desarrollo
        //     if ($temapara->simianti_id==0) {
        //         $temaxxxx->parametros()->detach($parametr);
        //         $temaxxxx->parametros()->attach($parametr,['user_crea_id' => 1, 'user_edita_id' => 1,'simianti'=>$parasimi['codigoxx']]);
        //     }
        // }
        // return $parametr;

    }
    public function getServiciosUpi($dataxxxx)
    {
    }
}
