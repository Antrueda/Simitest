<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\SimiantiguoException;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Indicadores\Area;
use App\Models\Parametro;
use App\Models\Simianti\Ba\BaTerritorio;
use App\Models\Simianti\Ge\GeCargo;
use App\Models\Simianti\Ge\GePersonalIdipron;
use App\Models\Simianti\Ge\GeUpi;
use App\Models\Simianti\Ge\GeUpiNnaj;
use App\Models\Simianti\Ge\GeUpiPersonal;
use App\Models\Simianti\Sis\Municipio;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisCargo;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisLocalupz;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisServicio;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisUpzbarri;
use App\Models\Temacombo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


/**
 * realizar migagraciones del simi anterior al nuevo desarrollo
 */
trait HomologacionesTrait
{
    public function getCedulaAleatoria()
    {
        $cedulaxx = '';
        $exiscela = false;
        do {
            $cedulaxx = random_int(1000000000, 1999999999);
            if (!isset(NnajDocu::where('s_documento', $cedulaxx)->first()->id)) {
                $exiscela = true;
            }
        } while (!$exiscela);
        return $cedulaxx;
    }

    //1019122258
    public function getBarrioHomologa($dataxxxx, $localupz, $barrioxx)
    {
        if ($localupz->id == 90 && $dataxxxx['idbarrio'] == 30043) {
            $barrioxx->id = 10187;
        }
        if ($localupz->id == 64 && $dataxxxx['idbarrio'] == 190233) {
            $barrioxx->id = 2438;
        }
        if ($localupz->id == 88 && $dataxxxx['idbarrio'] == 3107) {
            $barrioxx->id =  30048;
        }
        if ($localupz->id == 40 && $dataxxxx['idbarrio'] == 80130) {
            $barrioxx->id =  4563;
        }
        if ($localupz->id == 23 && $dataxxxx['idbarrio'] == 9206) {
            $barrioxx->id =  9205;
        }

        if ($localupz->id == 50 && $dataxxxx['idbarrio'] == 1432) {
            $barrioxx->id =  1421;
        }
        if ($localupz->id == 27 && $dataxxxx['idbarrio'] == 40168) {
            $barrioxx->id =  40196;
        }

        if ($localupz->id == 80 && $dataxxxx['idbarrio'] == 70294) {
            $barrioxx->id =  70293;
        }

        if ($localupz->id == 80 && $dataxxxx['idbarrio'] == 4521) {
            $barrioxx->id =  70150;
        }
        if ($localupz->id == 69 && $dataxxxx['idbarrio'] == 100039) {
            $barrioxx->id =      5662;
        }

        if ($localupz->id == 50 && $dataxxxx['idbarrio'] == 1416) {
            $barrioxx->id =      180151;
        }
        if ($localupz->id == 75 && $dataxxxx['idbarrio'] == 4620) {
            $barrioxx->id =      4621;
        }

        if ($localupz->id == 54 && $dataxxxx['idbarrio'] == 2614) {
            $barrioxx->id =      50125;
        }
        if ($localupz->id == 52 && $dataxxxx['idbarrio'] == 50103) {
            $barrioxx->id =      2503;
        }
        if ($localupz->id == 27 && $dataxxxx['idbarrio'] == 1308) {
            $barrioxx->id =      40197;
        }

        if ($localupz->id == 64 && $dataxxxx['idbarrio'] == 190176) {
            $barrioxx->id =      2427;
        }

        if ($localupz->id == 81 && $dataxxxx['idbarrio'] == 4632) {
            $barrioxx->id =      70254;
        }

        if ($localupz->id == 65 && $dataxxxx['idbarrio'] == 2460) {
            $barrioxx->id = 2568;
        }

        if ($localupz->id == 75 && $dataxxxx['idbarrio'] == 4560) {
            $barrioxx->id = 80112;
        }

        if ($localupz->id == 79 && $dataxxxx['idbarrio'] == 70226) {
            $barrioxx->id = 70288;
        }


        return $barrioxx;
    }
    public function getBarrio($dataxxxx)
    {
        if ($dataxxxx['idbarrio'] == 30012) {
            $dataxxxx['idbarrio'] == 30011;
        }
        // conocer datos del barrio en el antiguo simi
        $barrioxx = BaTerritorio::find($dataxxxx['idbarrio']);
        //ddd( $barrioxx);
        if (!isset($barrioxx->id)) {
            $dataxxxx['tituloxx'] = 'EL BARRIO NO EXISTE!';
            $dataxxxx['mensajex'] = "El id: {$dataxxxx['idbarrio']} de barrio existe en el antiguo simi.";
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        } else {

            // ddd($barrioxx);
            // if ($barrioxx->tipo == 'C') {
            //     $dataxxxx['tituloxx'] = 'EL BARRIO NO EXISTE O NO SE HA HOMOLOGADO!';
            //     $dataxxxx['mensajex'] = "BARRIO: $barrioxx->nombre con id: {$dataxxxx['idbarrio']}.";
            //     throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
            // } else {
            if ($barrioxx->id == 208207 || $barrioxx->id == 0) {
                $localida = SisLocalidad::find(22);
            } else {
                $localida = SisLocalidad::where('simianti_id', $barrioxx->padre->padre->id)->first();
            }
            if ($localida == null) {
                $dataxxxx['tituloxx'] = 'LOCALIDAD NO HOMOLOGADA!';
                $dataxxxx['mensajex'] = "LOCALIDAD: {$barrioxx->padre->padre->nombre} con id: {$barrioxx->padre->padre->id}.";
                throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
            }
            if ($barrioxx->id == 208207 || $barrioxx->id == 0) {
                $upzxxxxx = SisUpz::find(119);
            } else {
                $upzxxxxx = SisUpz::where('simianti_id', $barrioxx->padre->id)->first();
            }
            if ($upzxxxxx == null) {
                $dataxxxx['tituloxx'] = 'UPZ NO HOMOLOGADA!';
                $dataxxxx['mensajex'] = "UPZ: {$barrioxx->padre->nombre} con id: {$barrioxx->padre->id}.";
                throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
            }
            $localupz = SisLocalupz::where('sis_localidad_id', $localida->id)->where('sis_upz_id', $upzxxxxx->id)->first();

            $barrioxx = $this->getBarrioHomologa($dataxxxx, $localupz, $barrioxx);

            if ($barrioxx->id == 208207 || $barrioxx->id == 0) {
                $upzbarri = SisUpzbarri::where('sis_localupz_id', $localupz->id)->where('sis_barrio_id', 1653)->first();
            } else {
                $upzbarri = SisUpzbarri::where('sis_localupz_id', $localupz->id)->where('simianti_id', $barrioxx->id)->first();
            }
            if ($upzbarri == null) {
                $barrcrea = SisBarrio::where( 's_barrio' ,$barrioxx->nombre)->first();
                if ($barrcrea == null) {
                    $barrcrea = SisBarrio::create([
                        's_barrio' => $barrioxx->nombre,
                        'sis_esta_id' => 1,
                        'user_crea_id' => Auth::user()->id,
                        'user_edita_id' => Auth::user()->id
                    ]);
                    $upzbarri=SisUpzbarri::create([
                        'sis_localupz_id' => $localupz->id,
                        'sis_barrio_id' => $barrcrea->id,
                        'simianti_id' => $dataxxxx['idbarrio'],
                        'sis_esta_id' => 1,
                        'user_crea_id' => Auth::user()->id,
                        'user_edita_id' => Auth::user()->id
                    ]);
                }
                // $dataxxxx['tituloxx'] = 'EL BARRIO NO EXISTE O NO SE HA HOMOLOGADO!';
                // $dataxxxx['mensajex'] = "BARRIO: $barrioxx->nombre con id: {$dataxxxx['idbarrio']} Localidad:{$localupz->sis_localidad->s_localidad}, UPZ: {$localupz->sis_upz->s_upz} y LOCALIDAD-UPZ: {$localupz->id}.";
                // throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
            }
            return $upzbarri;
            // }
        }
    }
    /**
     * validar parametro que se encuentra que no es multivalor
     *
     * @param array $dataxxxx array que contiene los datos para realizar la validación del parametro
     * @return $parametr parametro resultado de la validación
     */
    public function getParametrosSimi($dataxxxx)
    {
        switch ($dataxxxx['temaxxxx']) {
            case 23:
                if ($dataxxxx['codigoxx'] == 'S' || $dataxxxx['codigoxx'] == 'N' || $dataxxxx['codigoxx'] == 'ON' || $dataxxxx['codigoxx'] == 'null' || $dataxxxx['codigoxx'] == 'null') {
                    $valoresx = ['S' => 'SI', 'N' => 'NO', 'ON' => 'SI', 'null' => 'NO', 'CAE/NE' => 'N/A'];
                    $dataxxxx['codigoxx'] = $valoresx[$dataxxxx['codigoxx']];
                }
                break;
        }
        $parametr = Parametro::where('nombre', $dataxxxx['codigoxx'])->first();
        if ($parametr == null) {
            // $parametr = Parametro::create([
            //     'nombre' => $dataxxxx['codigoxx'],
            //     'sis_esta_id' => Auth::user()->id,
            //     'user_crea_id' => Auth::user()->id,
            //     'user_edita_id' => 1,
            // ]);
        }
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
        $temaxxxx = Temacombo::where('id', $dataxxxx['temaxxxx'])->first();
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
        $comboxxy = Temacombo::where('id', $dataxxxx['temaxxxx'])->first();
        $comboxxx = $comboxxy->parametros;

        if ($dataxxxx['testerxx']) {
            // echo $dataxxxx['temaxxxx'] . ' ' . $dataxxxx['codigoxx'];
            // ddd($comboxxx);
        }
        $parametr = '';
        if ($dataxxxx['codigoxx'] == '') {
            $parametr = Parametro::find(445);
        } else {
            foreach ($comboxxx as $key => $value) {
                if ($value->pivot->simianti_id == $dataxxxx['codigoxx']) {
                    $parametr = $value;
                }
            }
        }

        switch ($dataxxxx['temaxxxx']) {
            case 367:
                if ($dataxxxx['codigoxx'] == null || $dataxxxx['codigoxx'] == 'null') {
                    $parametr = Parametro::find(235);
                }
                if ($dataxxxx['codigoxx'] == 3) {
                    $parametr = Parametro::find(235);
                }

                break;
            case 366:
                if ($dataxxxx['codigoxx'] == 3 || $dataxxxx['codigoxx'] == 3) {
                    $parametr = Parametro::find(235);
                }
                if ($dataxxxx['codigoxx'] == null || $dataxxxx['codigoxx'] == 'null') {
                    $parametr = Parametro::find(445);
                }
                break;
            case 19:
                if ($dataxxxx['codigoxx'] == 5) {
                    $parametr = Parametro::find(153);
                }
                break;

            case 33:

                if ($dataxxxx['codigoxx'] == null || $dataxxxx['codigoxx'] == 'null' || $dataxxxx['codigoxx'] == 'NT') {
                    $parametr = Parametro::find(235);
                }
                break;
            case 13:
                if ($dataxxxx['codigoxx'] == 5) {
                    $parametr = Parametro::find(445);
                }
                break;
        }

        if ($parametr == '') {
            $messagex = "El parámetro: {$dataxxxx['codigoxx']}  para la tabla: {$dataxxxx['tablaxxx']} no existe. ";
            $multival = SisMultivalore::where('tabla', $dataxxxx['tablaxxx'])
                ->where('codigo', $dataxxxx['codigoxx'])->first();
            if ($multival != null) {
                $messagex = $multival->descripcion;
            }
            $dataxxxx['tituloxx'] = 'PARAMETRO SIN HOMOLOGAR O NO CREADO EN EL NUEVO DESARROLLO!';
            $dataxxxx['mensajex'] = 'PARAMETRO: ' . $messagex . ' Codigo: ' . $dataxxxx['codigoxx'] . ' tabla: ' . $dataxxxx['tablaxxx'] .
                ' En el tema ID: ' . $comboxxy->id . ' Nombre: ' . $comboxxy->nombre . ' no se puede migrar porque no esta creado o no esta homologado en el nuevo desarrollo';
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }
        if ($dataxxxx['testerxx']) {
            // echo $dataxxxx['temaxxxx'] . ' ' . $dataxxxx['codigoxx'];
            // ddd($comboxxx);
        }

        if ($dataxxxx['testerxx']) {
            //  echo $dataxxxx['temaxxxx'] . ' ' . $dataxxxx['codigoxx'];
            //  ddd($parametr);
        }
        return $parametr;
    }
    public function getMunicipoSimi($dataxxxx)
    {
        $munianti = Municipio::find($dataxxxx['idmunici']);
        if ($dataxxxx['idmunici'] == 11001) {
            $muninuev = SisMunicipio::find(231);
        } elseif (!isset($munianti->codigo_municipio)) {
            $muninuev = SisMunicipio::find(1121);
        } else {
            $muninuev = SisMunicipio::where('s_municipio', $munianti->nombre_municipio)->first();
        }
        if (!isset($muninuev->id)) {
            $muninuev = SisMunicipio::find(1121);
        }
        return $muninuev;
    }
    public function getCargoHT($dataxxxx)
    {
        $cargosxx = GeCargo::find($dataxxxx['cargoidx']);
        if ($cargosxx == null) {
            $dataxxxx['tituloxx'] = 'CEDULA INCORRECTA!';
            $dataxxxx['mensajex'] = 'Para el número de cédula: ' . $dataxxxx['cedulaxx'] . ' la información está incompleto en ge_personal_idipron. ';
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }
        $cargosxy = SisCargo::where('s_cargo', $cargosxx->nombre_cargo)->first();
        if (isset($cargosxy->id)) {
            $cargosxy = SisCargo::find(58);
        }
        return $cargosxy;
    }

    public function getAreaUsuarioHT($dataxxxx)
    {
        $registro = Area::where('nombre', $dataxxxx['nombrexx'])->first();
        if (!isset($registro->id)) {
            $registro = Area::find(9);
        }
        $areaxxxx = $dataxxxx['usuariox']->areas->where('area_id', $registro->id)->first();
        if (!isset($areaxxxx->id)) {
            $areaxxxx = $dataxxxx['usuariox']->areas()->attach([
                $registro->id => [
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1
                ]
            ]);
        }
        return $registro;
    }

    public function getUsuarioHT($dataxxxx)
    {
        $personax = User::where('s_documento', $dataxxxx['cedulaxx'])->first();
        if (!isset($personax->id)) {

            $personax = GePersonalIdipron::select([
                'area',
                'tipo as prm_tvinculacion_id',
                'tipo_documento as prm_documento_id',
                'cargo as sis_cargo_id',
                'codigo_municipio_exp as sis_municipio_id',
                'primer_nombre as s_primer_nombre',
                'segundo_nombre as s_segundo_nombre',
                'primer_apellido as s_primer_apellido',
                'segundo_apellido as s_segundo_apellido',
                'id_documento as s_documento',
                'correo_electronico as email',
                'telefonos as s_telefono',
                'fecha_limite_vinculacion as d_finvinculacion',
                'tarjeta_matricula_profesional as s_matriculap',
            ])
                ->find($dataxxxx['cedulaxx']);
            $personax->prm_tvinculacion_id = $this->getParametrosSimiMultivalor([
                'codigoxx' => $personax->prm_tvinculacion_id,
                'tablaxxx' => 'TIPO_VINCULACION',
                'temaxxxx' => 310,
                'testerxx' => false,
            ])->id;
            $personax->prm_documento_id = $this->getParametrosSimiMultivalor([
                'codigoxx' => $personax->prm_documento_id,
                'tablaxxx' => 'TIPO_DOCUMENTO',
                'temaxxxx' => 3,
                'testerxx' => false,
            ])->id;
            $personax->sis_cargo_id = $this->getCargoHT(['cargoidx' => $personax->sis_cargo_id, 'cedulaxx' => $dataxxxx['cedulaxx']])->id;
            $personax->sis_municipio_id = $this->getMunicipoSimi(['idmunici' => $personax->sis_municipio_id])->id;
            $personax->itiestan = 10;
            $personax->itiegabe = 0;
            $personax->itigafin = 0;
            $personax->d_vinculacion = $personax->d_finvinculacion;

            $personax->estusuario_id = 1;
            $personax = User::transaccion($personax->toArray(), '');
            $this->getAreaUsuarioHT(['nombrexx' => $personax->area, 'usuariox' => $personax]);
        }

        $this->getAsignarUpiUsuario(['document' => $personax->s_documento, 'usuariox' => $personax]);
        //ddd($personax);
        return $personax;
    }

    public function getUnirUpiServicio($sisdepen, $servicio, $dataxxxx)
    {

        $servicix = $sisdepen->sis_servicios->find($servicio->id);
        // servicio no asignado la upi
        if ($servicix == null) {
            $servicio = $sisdepen->sis_servicios()->attach([$servicio->id => ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id, 'sis_esta_id' => 1,]]);
        }

        return $servicio;
    }
    public function getValidarUpi($dataxxxx, $sisdepen)
    {
        // no existe la upi
        if (!isset($sisdepen->id)) {
            $sisdepen = SisDepen::find(31);
        }
        return  $sisdepen;
    }

    public function getServiciosUpi($dataxxxx)
    {
        if ($dataxxxx['datobasi']) {
            $dependen = SisDepen::find($dataxxxx['sisdepen']);
        } else {
            $dependen = SisDepen::where('simianti_id', $dataxxxx['sisdepen'])->first();
            if ($dependen == null) {
                $dataxxxx['tituloxx'] = 'SERVICIO O UPI NO ENCONTRADO(A)!';
                $dataxxxx['dependen'] = GeUpi::find($dataxxxx['sisdepen']);
                $dataxxxx['servicio'] = SisMultivalore::where('tabla', 'MODALIDAD_UPI')->where('codigo', $dataxxxx['codigoxx'])->first();
                throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.depeanti', 'dataxxxx' => $dataxxxx]);
            }
        }
        $depeserv = $dependen->sis_servicios()->where('simianti_id', $dataxxxx['codigoxx'])->first();
        $servicio = SisServicio::where('simianti_id', $dataxxxx['codigoxx'])->first();
        if ($servicio == null) {
            $dataxxxx['tituloxx'] = 'SERVICIO NO ENCONTRADO!';
            $dataxxxx['mensajex'] = 'El servicio: ' . $dataxxxx['servicio']->descripcion . ' código: ' . $dataxxxx['servicio']->codigo . ' no se ha creado u homolagado';
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }
        if ($depeserv == null) {
            $dependen->sis_servicios()->attach([$servicio->id => [
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1
            ]]);
        }
        return $servicio;
    }
    /**
     * Asignar los serviciso que tienen asignado el nnaj el antiguo simi
     *
     * @param object $depenanj
     * @param object $servicio
     * @return void
     */
    public function setServicio($depenanj, $servicio)
    {
        $servnnaj = $depenanj->nnaj_deses->where('sis_servicio_id', $servicio->id)->first();
        if ($servnnaj == null) {
            $nnajdese = [
                'sis_servicio_id' => $servicio->id,
                'nnaj_upi_id' => $depenanj->id,
                'prm_principa_id' => 228,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1
            ];
            NnajDese::create($nnajdese);
        }
    }
    /**
     * asignar las upis y serviciso que tiene asignado el nnaj en el antiguo simi
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getUpisModalidadHT($dataxxxx)
    {
        $upismoda = GeUpiNnaj::where('id_nnaj', $dataxxxx['idnnajxx'])
            ->where('modalidad', '!=', null)
            ->where('estado', 'A')
            ->get();
        foreach ($upismoda as $key => $value) {
            if ($value->modalidad == 107) {
                $value->modalidad = 7;
            }
            $servicio = SisServicio::where('simianti_id', $value->modalidad)->first();
            if ($value->id_upi == 3) {
                $value->id_upi = 30;
            }
            $dependen = SisDepen::where('simianti_id', $value->id_upi)->first();


            $depenanj = $dependen->nnaj_upis->where('sis_nnaj_id', $dataxxxx['sisnnaji'])->first();
            if ($depenanj == null) {
                $nnajupix = [
                    'sis_nnaj_id' => $dataxxxx['sisnnaji'],
                    'sis_depen_id' => $dependen->id,
                    'user_crea_id' => Auth::user()->id,
                    'prm_principa_id' => 228,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1,
                ];
                $depenanj = NnajUpi::create($nnajupix);
            }
            $this->setServicio($depenanj, $servicio);
            $this->getServiciosUpi(['codigoxx' => $value->modalidad, 'sisdepen' => $value->id_upi, 'datobasi' => false]);
        }
    }
    public function getUpiSimi($dataxxxx)
    {
        // buscar la upi en el nuevo desarrollo
        if ($dataxxxx['idupixxx'] == 3) {
            $dataxxxx['idupixxx'] = 30;
        }
        $upinuevo = SisDepen::where('simianti_id', $dataxxxx['idupixxx'])->first();
        if ($upinuevo == null) {
            $upixxxxx = GeUpi::find($dataxxxx['idupixxx']);
            $dataxxxx['tituloxx'] = 'UPI NO ENCONTRADA U HOMOLOGADA!';
            $dataxxxx['mensajex'] = "La upi: {$upixxxxx->nombre} con id: {$upixxxxx->id_upi} no se pudo asigunar por que no existe o no se ha homologado";
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }
        return $upinuevo;
    }

    /**
     * encontrar las upis del usuario en el antiguo simi y asignarlas en el nuevo desarrollo al usuario
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getAsignarUpiUsuario($dataxxxx)
    {
        $personal = GeUpiPersonal::where('id_personal', $dataxxxx['document'])->get();
        foreach ($personal as $key => $value) {
            $dependen = $this->getUpiSimi(['idupixxx' => $value->id_upi]);
            $usuariox = User::find($dataxxxx['usuariox']->id)->sis_depens->find($dependen->id);
            if (!isset($usuariox->id)) {
                $dicotomi = $this->getParametrosSimi(['temaxxxx' => 23, 'codigoxx' => $value->responsable])->id;
                $relacion = [
                    $dependen->id => [
                        'i_prm_responsable_id' => $dicotomi,
                        'user_crea_id' => Auth::user()->id,
                        'user_edita_id' => Auth::user()->id,
                        'sis_esta_id' => 1,
                    ]
                ];
                $usuariox = $dataxxxx['usuariox']->sis_depens()->attach($relacion);
            } else {
                $dataxxxx['usuariox']->sis_depens()->updateExistingPivot($dependen->id, [
                    'i_prm_responsable_id' => $this->getParametrosSimi(['temaxxxx' => 23, 'codigoxx' => $value->responsable])->id
                ]);
            }
        }
    }
}
