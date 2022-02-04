<?php

namespace App\Traits\Interfaz\Nuevsimi;

use App\Exceptions\Interfaz\SimiantiguoException;
use App\Models\Simianti\Ba\BaTerritorio;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisLocalupz;
use App\Models\sistema\SisUpz;
use App\Models\sistema\SisUpzbarri;
use Illuminate\Support\Facades\Auth;

/**
 * realiza la validaciones para homologar un barrio del antiguo desarrollo al nuevo desarrollo
 *
 */
trait BarrioTrait
{
    private $localida = null;
    private $upzxxxxx = null;
    private $barrioxx = null;
    private $localupz = null;
    private $upzbarri = null;


    //1019122258
    public function getBarrioHomologa($dataxxxx)
    {
        if ($this->localupz->id == 90 && $dataxxxx['idbarrio'] == 30043) {
            $this->barrioxx->id = 10187;
        }
        if ($this->localupz->id == 64 && $dataxxxx['idbarrio'] == 190233) {
            $this->barrioxx->id = 2438;
        }
        if ($this->localupz->id == 88 && $dataxxxx['idbarrio'] == 3107) {
            $this->barrioxx->id =  30048;
        }
        if ($this->localupz->id == 40 && $dataxxxx['idbarrio'] == 80130) {
            $this->barrioxx->id =  4563;
        }
        if ($this->localupz->id == 23 && $dataxxxx['idbarrio'] == 9206) {
            $this->barrioxx->id =  9205;
        }

        if ($this->localupz->id == 50 && $dataxxxx['idbarrio'] == 1432) {
            $this->barrioxx->id =  1421;
        }
        if ($this->localupz->id == 27 && $dataxxxx['idbarrio'] == 40168) {
            $this->barrioxx->id =  40196;
        }

        if ($this->localupz->id == 80 && $dataxxxx['idbarrio'] == 70294) {
            $this->barrioxx->id =  70293;
        }

        if ($this->localupz->id == 80 && $dataxxxx['idbarrio'] == 4521) {
            $this->barrioxx->id =  70150;
        }
        if ($this->localupz->id == 69 && $dataxxxx['idbarrio'] == 100039) {
            $this->barrioxx->id =      5662;
        }

        if ($this->localupz->id == 50 && $dataxxxx['idbarrio'] == 1416) {
            $this->barrioxx->id =      180151;
        }
        if ($this->localupz->id == 75 && $dataxxxx['idbarrio'] == 4620) {
            $this->barrioxx->id =      4621;
        }

        if ($this->localupz->id == 54 && $dataxxxx['idbarrio'] == 2614) {
            $this->barrioxx->id =      50125;
        }
        if ($this->localupz->id == 52 && $dataxxxx['idbarrio'] == 50103) {
            $this->barrioxx->id =      2503;
        }
        if ($this->localupz->id == 27 && $dataxxxx['idbarrio'] == 1308) {
            $this->barrioxx->id =      40197;
        }

        if ($this->localupz->id == 64 && $dataxxxx['idbarrio'] == 190176) {
            $this->barrioxx->id =      2427;
        }

        if ($this->localupz->id == 81 && $dataxxxx['idbarrio'] == 4632) {
            $this->barrioxx->id =      70254;
        }

        if ($this->localupz->id == 65 && $dataxxxx['idbarrio'] == 2460) {
            $this->barrioxx->id = 2568;
        }

        if ($this->localupz->id == 75 && $dataxxxx['idbarrio'] == 4560) {
            $this->barrioxx->id = 80112;
        }

        if ($this->localupz->id == 79 && $dataxxxx['idbarrio'] == 70226) {
            $this->barrioxx->id = 70288;
        }
    }

    /**
     * encontrar la localidad del barrio
     *
     * @return void
     */
    public function getLocalidad()
    {
        if ($this->barrioxx->id == 208207 || $this->barrioxx->id == 0) {
            $this->localida = SisLocalidad::find(22);
        } else { 
            if (is_null($this->barrioxx->padre)) {
                $dataxxxx['tituloxx'] = 'BARRIO SIN UPZ!';
                $dataxxxx['mensajex'] = 'El barrio '.$this->barrioxx->nombre.' ID: '.$this->barrioxx->id.' no cuenta con upz en el antiguo simi. Nota revisar también la localidad' ;
                throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.barrioan', 'dataxxxx' => $dataxxxx]);
            }
            if (is_null($this->barrioxx->padre->padre)) {
                $dataxxxx['tituloxx'] = 'BARRIO SIN LOCALIDAD!';
                $dataxxxx['mensajex'] = 'El barrio '.$this->barrioxx->nombre.' ID: '.$this->barrioxx->id.' no cuenta con localidad en el antiguo simi' ;
                throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.barrioan', 'dataxxxx' => $dataxxxx]);
            }

          
            $this->localida = SisLocalidad::where('simianti_id', $this->barrioxx->padre->padre->id)->first();
        }
    }

    /**
     * encontrar la upz del barrio
     *
     * @return void
     */
    public function getUpz()
    {
        if ($this->barrioxx->id == 208207 || $this->barrioxx->id == 0) {
            $this->upzxxxxx = SisUpz::find(119);
        } else {
            $this->upzxxxxx = SisUpz::where('simianti_id', $this->barrioxx->padre->id)->first();
        }
    }

    /**
     * encontrar la upz-barrio
     *
     * @return void
     */
    public function getUpzbarrio()
    {
        if ($this->barrioxx->id == 208207 || $this->barrioxx->id == 0) {
            $this->upzbarri = SisUpzbarri::where('sis_localupz_id', $this->localupz->id)->where('sis_barrio_id', 1653)->first();
        } else {
            $this->upzbarri = SisUpzbarri::where('sis_localupz_id', $this->localupz->id)->where('simianti_id', $this->barrioxx->id)->first();
        }
    }

    /**
     * realizar validaciones para encontra la upz-barrio al que pertenece
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getBarrioValidar($dataxxxx)
    {
        if ($dataxxxx['idbarrio'] == 30012) {
            $dataxxxx['idbarrio'] == 30011;
        }
        // conocer datos del barrio en el antiguo simi
        $this->barrioxx = BaTerritorio::find($dataxxxx['idbarrio']);
        if ($this->barrioxx != null) {
            $this->getLocalidad();
            $this->getUpz();
            $this->localupz = SisLocalupz::where('sis_localidad_id', $this->localida->id)->where('sis_upz_id', $this->upzxxxxx->id)->first();
            $this->getBarrioHomologa($dataxxxx);
            $this->getUpzbarrio();
        }
    }

    /**
     * homologar el barrio encontrado
     *
     * @param array $dataxxxx
     * @return object $upzbarri
     */
    public function getBarrio($dataxxxx)
    {
        
        $this->getBarrioValidar($dataxxxx);
        if ($this->barrioxx == null) {
            $dataxxxx['tituloxx'] = 'EL BARRIO NO EXISTE!';
            $dataxxxx['mensajex'] = "El id: {$dataxxxx['idbarrio']} de barrio existe en el antiguo simi.";
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }

        if ($this->localida == null) {
            $dataxxxx['tituloxx'] = 'LOCALIDAD NO HOMOLOGADA!';
            $dataxxxx['mensajex'] = "LOCALIDAD: {$this->barrioxx->padre->padre->nombre} con id: {$this->barrioxx->padre->padre->id}.";
            throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
        }

        if ($this->upzbarri == null) {
            $nombrexx = strtoupper($this->barrioxx->nombre);
            $barrcrea = SisBarrio::where('s_barrio', $nombrexx)->first();
            if ($barrcrea == null) {
                $barrcrea = SisBarrio::create([
                    's_barrio' => $nombrexx,
                    'sis_esta_id' => 1,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id
                ]);
                $this->upzbarri = SisUpzbarri::create([
                    'sis_localupz_id' => $this->localida->id,
                    'sis_barrio_id' => $barrcrea->id,
                    'simianti_id' => $dataxxxx['idbarrio'],
                    'sis_esta_id' => 1,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id
                ]);
            } else {

                $upzbarrx = SisUpzbarri::where('sis_localupz_id', $this->localida->id)->where('sis_barrio_id', $barrcrea->id)->first();
                if ($upzbarrx == null) {
                    $upzbarrx = SisUpzbarri::create([
                        'sis_localupz_id' => $this->localida->id,
                        'sis_barrio_id' => $barrcrea->id,
                        'simianti_id' => $dataxxxx['idbarrio'],
                        'sis_esta_id' => 1,
                        'user_crea_id' => Auth::user()->id,
                        'user_edita_id' => Auth::user()->id
                    ]);
                } else {
                    $upzbarrx->update(['simianti_id' => $dataxxxx['idbarrio'], 'user_edita_id' => Auth::user()->id]);
                }
                $this->upzbarri = $upzbarrx;
            }
        }
        return $this->upzbarri;
    }
}
