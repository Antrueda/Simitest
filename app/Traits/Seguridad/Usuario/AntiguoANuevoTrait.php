<?php

namespace App\Traits\Seguridad\Usuario;

use App\Exceptions\Interfaz\SimiantiguoException;
use App\Models\Indicadores\Area;
use App\Models\Simianti\Ge\GeCargo;
use App\Models\Simianti\Ge\GeUpi;
use App\Models\Simianti\Ge\GeUpiPersonal;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisDepen;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Este trait permite realizar la homologación de un usuario del antiguo al nuevo desarrollo
 */
trait AntiguoANuevoTrait
{
    /**
     * encotrar el cargo asignado
     *
     * @param array $dataxxxx
     * @return object $cargosxy
     */
    public function getCargoHT($dataxxxx)
    {
        $cargosxx = GeCargo::find($dataxxxx['cargoidx']);
        if ($cargosxx == null) {
            $dataxxxx['tituloxx'] = 'CEDULA INCORRECTA!';
            $dataxxxx['mensajex'] = 'Para el número de cédula: ' . $dataxxxx['cedulaxx'] . ' la información está incompleto en ge_personal_idipron. ';
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }
        $cargosxy = SisCargo::where('s_cargo', $cargosxx->nombre_cargo)->first();
        if (!isset($cargosxy->id)) {
            $cargosxy = SisCargo::find(58);
        }
        return $cargosxy;
    }

    /**
     * datos que se necesita para crear un usuario en el nuevo desarrollo
     *
     * @param array $dataxxxx
     * @return array $usuariox
     */

    public function getAntiguoANT($dataxxxx)
    {
        try {
            // ddd($usuanuev,$objetoxx->toArray());

            $objetoxx = $dataxxxx['objetoxx'];
            $usuariox = [
                'name' => $objetoxx->primer_nombre . ' ' . $objetoxx->segundo_nombre . ' ' .
                    $objetoxx->primer_apellido . ' ' . $objetoxx->segundo_apellido,
                's_primer_nombre' => $objetoxx->primer_nombre,
                's_segundo_nombre' => $objetoxx->segundo_nombre,
                's_primer_apellido' => $objetoxx->primer_apellido,
                's_segundo_apellido' => $objetoxx->segundo_apellido,
                'email' => $objetoxx->correo_electronico . '5',
                'sis_esta_id' => 1,
                's_telefono' => $objetoxx->telefonos,
                'prm_tvinculacion_id' => $this->getParametrosSimiMultivalor([
                    'codigoxx' => $objetoxx->tipo,
                    'tablaxxx' => 'TIPO_VINCULACION',
                    'temaxxxx' => 310,
                    'testerxx' => false,
                ])->id,
                's_matriculap' => $objetoxx->tarjeta_matricula_profesional,
                'sis_cargo_id' => $this->getCargoHT(['cargoidx' => $objetoxx->cargo, 'cedulaxx' => $objetoxx->id_documento])->id,
                'd_finvinculacion' => $objetoxx->fecha_limite_vinculacion,
                'd_vinculacion' => Carbon::now(),
                's_documento' => $objetoxx->id_documento,
                'prm_documento_id' => $this->getParametrosSimiMultivalor([
                    'codigoxx' => $objetoxx->tipo_documento,
                    'tablaxxx' => 'TIPO_DOCUMENTO',
                    'temaxxxx' => 3,
                    'testerxx' => false,
                ])->id,
                'sis_municipio_id' => $this->getMunicipoSimi(['idmunici' => $objetoxx->codigo_municipio_exp])->id,
                'estusuario_id' => 1,
                'itiestan' => 0,
                'itiegabe' => 0,
                'itigafin' => 0,
                'password_change_at' => Carbon::now(),
            ];
        } catch (Throwable $th) {
            $dataxxxx['dataxxxx']['tituloxx'] = 'ERROR PRESENTADO!';
            $dataxxxx['dataxxxx']['excepcio'] = 'Disculpe se presentó el siguiente error: ' . $th->getMessage() . ' en la línea: ' . $th->getLine() . ' del archivo: ' . $th->getFile();
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.excepcion', 'dataxxxx' => $dataxxxx]);
        }
        return $usuariox;
    }

    /**
     * asignar las areas que tiene en el otro sistema
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getAreaUsuarioHT($dataxxxx)
    {
        $registro = Area::where('nombre', $dataxxxx['nombrexx'])->first();
        if ($registro == null) {
            $dataxxxx['tituloxx'] = 'AREA NO ENCONTRADA U HOMOLOGADA!';
            $dataxxxx['mensajex'] = "EL AREA: {$dataxxxx['nombrexx']}  no se pudo asigunar por que no existe o no se ha homologado";
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
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
    }


    /**
     * verificar que el usuario ya tenga la upi asignada
     *
     * @param array $dataxxxx
     * @return $upinuevo
     */
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
            if ($usuariox == null) { // se asigna la upi
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
            } else { // se define la responsabilidad de la upi
                $dataxxxx['usuariox']->sis_depens()->updateExistingPivot($dependen->id, [
                    'i_prm_responsable_id' => $this->getParametrosSimi(['temaxxxx' => 23, 'codigoxx' => $value->responsable])->id
                ]);
            }
        }
    }



    public function getUsuarioHT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = $dataxxxx['objetoxx'];
            $personax = User::where('s_documento', $objetoxx->id_documento)->first();
            if ($personax==null) {
                $personax = User::transaccion($this->getAntiguoANT($dataxxxx), '');
            }
            // $this->getAreaUsuarioHT(['usuariox' => $personax]);
            $this->getAsignarUpiUsuario(['document' => $personax->s_documento, 'usuariox' => $personax]);
            return $personax;
        }, 5);
        return $objetoxx;
    }
}
