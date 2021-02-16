<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\NnajDocu;
use App\Models\Parametro;
use App\Models\Simianti\Ba\BaTerritorio;
use App\Models\Simianti\Ge\GeUpi;
use App\Models\Simianti\Sis\Municipio;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisLocalupz;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisServicio;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisUpzbarri;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;


/**
 * realizar migagraciones del simi anterior al nuevo desarrollo
 */
trait HomologacionesTrait
{
    public function getCedulaAleatoria()
    {
        $cedulaxx='';
        $exiscela=false;
        do {
            $cedulaxx = random_int(1000000000, 1999999999);
            if(!isset(NnajDocu::where('s_documento',$cedulaxx)->first()->id)){
                $exiscela=true;
            }
        } while (!$exiscela);
        return $cedulaxx;
    }
    public function setBarrioUpz($localupz, $barrioxy)
    {
        $respuest = SisUpzbarri::where('sis_localupz_id', $localupz->id)->where('sis_barrio_id', $barrioxy->id)->first();
        if (!isset($respuest->id)) {
            $respuest = SisUpzbarri::create([
                'sis_localupz_id' => $localupz->id,
                'sis_barrio_id' => $barrioxy->id,
                'simianti_id' => 0,
                'sis_esta_id' => 1,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);
        }
        return $respuest;
    }

    public function setLocalidadUpz($upzxxxxy, $localidy)
    {
        if (!isset($upzxxxxy->id)) {
            $upzxxxxy =  SisLocalupz::create([
                'sis_upz_id' => $upzxxxxy->id,
                'sis_localidad_id' => $localidy->id,
                'sis_esta_id' => 1,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);
        }

        return $upzxxxxy;
    }
    public function getUpzInterfaz($upzxxxxy, $localidy, $barrioxy)
    {
        $respuest = [];
        if (!isset($upzxxxxy->id)) {
            $upzxxxxy = SisUpz::find(121);
            // si la localidad no existe
            if (!isset($localidy->id)) {
                $respuest = SisUpzbarri::find(1928);
            } else {
                $localupz = SisLocalupz::where('sis_upz_id', $upzxxxxy->id)->where('sis_localidad_id', $localidy->id)->first();
                // si la unios de la upz y la localidad no existen
                // ddd($localupz);
                if (!isset($localupz->id)) {
                    $localupz = $this->setLocalidadUpz($upzxxxxy, $localidy);
                    $respuest = $this->setBarrioUpz($localupz, $barrioxy);
                } else {
                    $respuest = $this->setBarrioUpz($localupz, $barrioxy);
                }
            }
        } else {
            $localupz = SisLocalupz::where('sis_upz_id', $upzxxxxy->id)->where('sis_localidad_id', $localidy->id)->first();
            $respuest = $this->setBarrioUpz($localupz, $barrioxy);
        }

        return $respuest;
    }
    public function getBarrio($dataxxxx)
    {
        // conocer datos del barrio en el antiguo simi
        $barrioxx = BaTerritorio::find($dataxxxx['idbarrio']);
        $upzxxxxx = BaTerritorio::where('id', $barrioxx->id_padre)->first();
        // conocer la upz en el nuevo desarrollo
        $upzxxxxy = SisUpz::where('s_upz', $upzxxxxx->nombre)->first();
        $localidx = BaTerritorio::where('id', $upzxxxxx->id_padre)->first();
        $localidy = SisLocalidad::where('s_localidad', $localidx->nombre)->first();
        // saber si el barrio asignado al nnaj en el simi ya se encuentra en el nuevo desarrollo
        $barrioxy = SisBarrio::where('s_barrio', $barrioxx->nombre)->first();
        $respuest = [];
        // si el barrio no existe
        if (!isset($barrioxy->id)) {
            $barrioxy = SisBarrio::find(1655);
            // si la upz no exites
            $respuest = $this->getUpzInterfaz($upzxxxxy, $localidy, $barrioxy);
        } else {
            // si la upz no exites
            $respuest = $this->getUpzInterfaz($upzxxxxy, $localidy, $barrioxy);
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
            $this->getAsociarParametro($temaxxxx, $parametr, 0);
        }
        // se actualiza el id del simi antiguo
        else {
            // se actualizan los parámetos que viene de la tabla sis_multivalores del antiguo simi
            if ($actualiz && $temapara->pivot->simianti_id == 0 && ($parametr->id != 2502 || $parametr->id != 2503)) {
                $temapara->pivot->update(['simianti_id' => $parasimi]);
            }
        }

        //  if ($temaxxxx->id == 23) {
        //         ddd($temapara->pivot);
        //     }
        return $parametr;
    }
    /**
     * obtiene el parametro que se va asignar
     *
     * @param object $parametr parametro que se va asociar
     * @param array $dataxxxx información que permite realizar la validación para obtener el parámetro
     * @param boolean $actualiz axiliar que recibe el método getAsociarParametro
     * @param string $parasimi
     * @return $parametr
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
        // if ($dataxxxx['temaxxxx'] == 23) {
        //         ddd($parametr);
        //     }
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
            $multival = SisMultivalore::where('tabla', $dataxxxx['tablaxxx'])->where('codigo', $dataxxxx['codigoxx'])->first();
            switch ($dataxxxx['temaxxxx']) {
                case 3:
                    $posiciox = substr($dataxxxx['codigoxx'], 0, 1);
                    $posicioy = substr($dataxxxx['codigoxx'], 1);
                    $multival->descripcion = $posiciox . '.' . $posicioy . '.';
                    break;

                case 20:
                    if ($multival->descripcion == 'BLANCO') {
                        $multival->descripcion = $multival->descripcion . '(A)';
                    }
                    break;

                case 290:
                    $multival->descripcion = substr(explode('(', $multival->descripcion)[0], 0, -1) . 'A';
                    break;
            }
            if ($dataxxxx['testerxx']) {
                ddd($dataxxxx['codigoxx']);
            }
            // buscar el parametro en el nuevo desarrollo
            $parametr = Parametro::where('nombre', $multival->descripcion)->first();
        }

        // se crea el parametro y se asocia con el tema
        $parametr = $this->getValidarParametro($parametr, $dataxxxx, true, $parasimi['codigoxx']);
        if ($dataxxxx['testerxx']) {
            ddd($parametr);
        }
        return $parametr;
    }
    public function getMunicipoSimi($dataxxxx)
    {

        $munianti = Municipio::find($dataxxxx['idmunici']);
        if ($dataxxxx['idmunici'] == 11001) {
            $muninuev = SisMunicipio::find(321);
        } elseif (!isset($munianti->id)) {
            $muninuev = SisMunicipio::find(1121);
        }
        else {
            $muninuev = SisMunicipio::where('s_municipio', $munianti->nombre_municipio)->first();
        }
        if (!isset($muninuev->id)) {
            $muninuev = SisMunicipio::find(1121);
        }
        return $muninuev;
    }
    public function getUpiSimi($dataxxxx)
    {



        // buscar la upi en el antiguo desarrollo
        $upisimix = GeUpi::find($dataxxxx['idupixxx']);
        // buscar la upi en el nuevo desarrollo
        $upinuevo = SisDepen::where('nombre', $upisimix->nombre)->first();
        // $upinuevo = SisDepen::where('nombre', $upisimix->nombrexx)->first();

        // se crea la upi y se asocia con el tema
        if (!isset($upinuevo->id)) {
            $upinuevo = SisDepen::find(31);

            // $dataupix = [
            //     'nombre' => $upisimix->nombrexx,
            //     'i_prm_cvital_id' => $this->getParametrosSimiMultivalor(['tablaxxx' => 'CICLO_VITAL', 'codigoxx' => $upisimix->ciclvita, 'temaxxxx' => 311])->id,
            //     'i_prm_tdependen_id' => $this->getParametrosSimi(['codigoxx' => $upisimix->tipodepe, 'temaxxxx' => 192])->id,
            //     'i_prm_sexo_id' => $this->getParametrosSimiMultivalor(['tablaxxx' => 'SEXO_UPI', 'codigoxx' => $upisimix->sexoxxxx, 'temaxxxx' => 339])->id,
            //     's_direccion' => $upisimix->direccio,
            //     'sis_departam_id' => '',
            //     'sis_municipio_id' => '',
            //     'estusuario_id' => 25,
            //     'simianti_id' => $upisimix->idxxxxxx,
            //     'sis_upzbarri_id' => '',
            //     's_telefono' => $upisimix->telefono,
            //     's_correo' => $upisimix->emailxxx,
            //     'itiestan' => 10,
            //     'itiegabe' => 0,
            //     'itigafin' => 0,
            //     'sis_esta_id' => 1,
            //     'user_crea_id' => Auth::user()->id,
            //     'user_edita_id' => Auth::user()->id,
            // ];

            // $upinuevo = SisDepen::create($dataupix);
        } else {
            // $temapara = $temaxxxx->parametros()->where('parametro_id',$parametr->id)->first();
            //     // se asocia el tema con la upi
            //     if(!isset($temapara->parametro_id)){
            //         $temaxxxx->parametros()->attach($parametr,['user_crea_id' => 1, 'user_edita_id' => 1,'simianti'=>$parasimi['codigoxx']]);
            //     }else
            //     // se le actualiza la upi del antiguo desarrollo
            //     if ($temapara->simianti_id==0) {
            //         $temaxxxx->parametros()->detach($parametr);
            //         $temaxxxx->parametros()->attach($parametr,['user_crea_id' => 1, 'user_edita_id' => 1,'simianti'=>$parasimi['codigoxx']]);
            //     }
        }
        return $upinuevo;
    }
    public function getAsignarServicio($dataxxxx)
    {
        $servicio = SisServicio::find(7);
        $sisdepen = SisDepen::find($dataxxxx['sisdepen']);
        if ($sisdepen != null) {
            $servicix = $sisdepen->sis_servicios->find($servicio->id);
            if ($servicix == null) {

                $sisdepen->sis_servicios()->attach([$servicio->id=> ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id, 'sis_esta_id' => 1,]]);
            }
        }
        return $servicio;
    }
    public function getServiciosUpi($dataxxxx)
    {
        $servicio = [];
        if ($dataxxxx['codigoxx'] != '') {
            // buscar el servicio en el antiguo desarrollo
            $multival = SisMultivalore::where('tabla', $dataxxxx['tablaxxx'])->where('codigo', $dataxxxx['codigoxx'])->first();
            $servicio = SisServicio::where('s_servicio', $multival->descripcion)->first();
            if (!isset($servicio)) {
                $servicio =$this->getAsignarServicio($dataxxxx);
            }
        } else {
            $servicio =$this->getAsignarServicio($dataxxxx);
        }

        return $servicio;
    }
}
