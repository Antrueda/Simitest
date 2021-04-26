<?php

namespace App\Traits\Fi\Compfami;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Sistema\SisNnaj;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CFCrudTrait
{
    use CrudDatosBasicosNnajTrait;
    private $dataxxxx,  $objetoxx;


    /**
     * crear o editar datos basicos del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function getDbcomfamiliar($dataxxxx, $objetoxx)
    {
        if ($objetoxx != '') {
            /** Actualizar registro */
            $objetoxx->update($dataxxxx);
        } else {
            /** Es un registro nuevo */
            $dataxxxx['sis_nnaj_id'] = SisNnaj::create([
                'sis_esta_id' => 1,
                'user_crea_id' =>  $dataxxxx['user_crea_id'],
                'user_edita_id' => $dataxxxx['user_edita_id'],
                'prm_escomfam_id' => 228
            ])->id;
            $objetoxx = FiDatosBasico::create($dataxxxx);
        }
        $dataxxxx['fi_datos_basico_id'] = $objetoxx->id;
        $this->setNnajNacimi($dataxxxx, $objetoxx->nnaj_nacimi);
        return $objetoxx;
    }





    /**
     * grabar datos basicos del componente familiar
     *
     */

    public function setInicializaCampos()
    {
        $this->dataxxxx['user_crea_id'] = Auth::user()->id;
        $this->dataxxxx['prm_tipoblaci_id'] = 235;
        $this->dataxxxx['prm_estrateg_id'] = 235;
        $this->dataxxxx['sis_docfuen_id'] = 2;
        $this->dataxxxx['sis_esta_id'] = 1;
        $this->dataxxxx['prm_ayuda_id'] = 235;
        $this->dataxxxx['prm_doc_fisico_id'] = 235;
    }
    /**registrar informacion del nnaj para datos basicos y documento de identidad cuando se crea la composcion familiar */
    public function setDBComposicionFamiliar($dataxxxx, $padrexxx)
    {
        $objetoxx = NnajDocu::where('s_documento', $dataxxxx['s_documento'])->first();
        if (isset($objetoxx->id) || $padrexxx != '') {
            $padrexxx = ($padrexxx) != '' ? $padrexxx->sis_nnaj->fi_datos_basico : $objetoxx->fi_datos_basico;
            $objetoxx = (isset($objetoxx->id)) == true ? $objetoxx : $padrexxx->sis_nnaj->fi_datos_basico->nnaj_docu;
            $this->getDbcomfamiliar($dataxxxx, $padrexxx); // actualizar datos basicos del componente familiar
            $objetoxx->update($dataxxxx);
        } else {
            $this->setInicializaCampos();
            $datosbas = $this->getDbcomfamiliar($dataxxxx, '');
            $dataxxxx['fi_datos_basico_id'] = $datosbas->id;
            $objetoxx = NnajDocu::create($dataxxxx);
        }
        return $objetoxx;
    }

    public function setNacimiento()
    {
        $dt = new DateTime($this->dataxxxx['d_nacimiento']);
        $this->dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
    }
    public function setDatosbasicos()
    {
        $datosbas = $this->setDBComposicionFamiliar($this->dataxxxx, $this->objetoxx);
        $this->dataxxxx['sis_nnaj_id'] = $datosbas->fi_datos_basico->sis_nnaj_id;
    }
    public function setFiCompfami($dataxxxx,  $objetoxx)
    {



        $this->dataxxxx = $dataxxxx;
        $this->objetoxx = $objetoxx;
        $objetoxx = DB::transaction(function () {
            $this->setNacimiento();
            $this->dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($this->objetoxx != '') {
                $this->objetoxx->update($this->setDatosbasicos());
            } else {
                $this->dataxxxx['user_crea_id'] = Auth::user()->id;
                $this->objetoxx = FiCompfami::create($this->setDatosbasicos());
            }
            return $this->objetoxx;
        }, 5);
        return $objetoxx;
    }
}
