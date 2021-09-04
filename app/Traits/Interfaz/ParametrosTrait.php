<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\SimiantiguoException;
use App\Models\Parametro;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Temacombo;



/**
 * realizar migagraciones del simi anterior al nuevo desarrollo
 */
trait ParametrosTrait
{
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
        if ($dataxxxx['codigoxx'] == '' || is_null($dataxxxx['codigoxx'])) {
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
            case 290:
                if ($dataxxxx['codigoxx'] == 3) {
                    $parametr = Parametro::find(445);
                }
                break;
            case 310:
                if ($dataxxxx['codigoxx'] == 'CONTRATISTA') {
                    $parametr = Parametro::find(1673);
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

        return $parametr;
    }
}
