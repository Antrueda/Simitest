<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\SimiantiguoException;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Indicadores\Area;
use App\Models\Simianti\Ge\GeCargo;
use App\Models\Simianti\Ge\GePersonalIdipron;
use App\Models\Simianti\Ge\GeUpi;
use App\Models\Simianti\Ge\GeUpiNnaj;
use App\Models\Simianti\Ge\GeUpiPersonal;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Sistema\SisCargo;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisServicio;
use App\Models\User;
use App\Traits\Interfaz\Nuevsimi\MunicipioTrait;
use Illuminate\Support\Facades\Auth;


/**
 * realizar migagraciones del simi anterior al nuevo desarrollo
 */
trait HomologacionesTrait
{
    use ParametrosTrait;
    use MunicipioTrait;
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
            ])->id; ddd($dataxxxx['cedulaxx']);
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
        $depeserv = $dependen->sis_servicios->where('simianti_id', $dataxxxx['codigoxx'])->first();
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
