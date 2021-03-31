<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\SimiantiguoException;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Indicadores\Area;
use App\Models\Parametro;
use App\Models\Simianti\Ba\BaTerritorio;
use App\Models\Simianti\Ge\FichaAcercamientoIngreso;
use App\Models\Simianti\Ge\GeCargo;
use App\Models\Simianti\Ge\GeNnaj;
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
        //ddd( $barrioxx);
        if (!isset($barrioxx->id)) {

            $barrioxy = SisUpzbarri::find(1929);
            // conocer la upz en el nuevo desarrollo
            $upzxxxxy = $barrioxy->sis_localupz->sis_upz_id;
            $localidy = $barrioxy->sis_localupz->sis_localidad_id;
        } else {
            if ($barrioxx->tipo == 'C') {

                $barrioxy = SisUpzbarri::find(1929);
                // conocer la upz en el nuevo desarrollo
                $upzxxxxy = $barrioxy->sis_localupz->sis_upz_id;
                $localidy = $barrioxy->sis_localupz->sis_localidad_id;
                // saber si el barrio asignado al nnaj en el simi ya se encuentra en el nuevo desarrollo
            } else {

                $upzxxxxx = BaTerritorio::where('id', $barrioxx->id_padre)->first();
                // conocer la upz en el nuevo desarrollo
                $upzxxxxy = SisUpz::where('s_upz', $upzxxxxx->nombre)->first();
                $localidx = BaTerritorio::where('id', $upzxxxxx->id_padre)->first();
                $localidy = SisLocalidad::where('s_localidad', $localidx->nombre)->first();
                // saber si el barrio asignado al nnaj en el simi ya se encuentra en el nuevo desarrollo
                $barrioxy = SisBarrio::where('s_barrio', 'like', '%' . $barrioxx->nombre . '%')->first();
            }
        }
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
        if($parametr == ''){
            $dataxxxx['tituloxx'] = 'PARAMETRO SIN HOMOLOGAR O NO CREADO EN EL NUEVO DESARROLLO!';
            $dataxxxx['mensajex'] = 'PARAMETRO: ' .SisMultivalore::where('tabla',$dataxxxx['tablaxxx'])
            ->where('codigo',$dataxxxx['codigoxx'])->first()->descripcion.' Codigo: '. $dataxxxx['codigoxx'].
            'En el tema ID: ' .$comboxxy->id.' Nombre: '. $comboxxy->nombre .' no se puede migrar porque no esta creado o no esta homologado en el nuevo desarrollo';
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }
        if ($dataxxxx['testerxx']) {
            // echo $dataxxxx['temaxxxx'] . ' ' . $dataxxxx['codigoxx'];
            // ddd($comboxxx);
        }
        switch ($dataxxxx['temaxxxx']) {
            case 367:
                if ($dataxxxx['codigoxx'] == null || $dataxxxx['codigoxx'] == 'null') {
                    $parametr = Parametro::find(235);
                }
                break;
        }
        if ($dataxxxx['testerxx']) {
             echo $dataxxxx['temaxxxx'] . ' ' . $dataxxxx['codigoxx'];
             ddd($parametr);
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
        $cargosxx = GeCargo::find($dataxxxx['cargoidx'])->first();
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
            $personax->sis_cargo_id = $this->getCargoHT(['cargoidx' => $personax->sis_cargo_id])->id;
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
            $servicio = SisServicio::where('simianti_id', $value->modalidad)->first();
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
        $upinuevo = SisDepen::where('simianti_id', $dataxxxx['idupixxx'])->first();
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
            // ddd($value->id_upi);
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
