<?php

namespace App\Traits\Interfaz\Nuevsimi;

use App\Models\Parametro;
use App\Models\Simianti\Ge\GeUpi;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Sistema\SisDepen;
use App\Models\Temacombo;

/**
 * actuliza un nnaj en el nuevo desarrollo con la información que se encuentra en el antiguo simi
 */
trait MigrarUpiTrait
{

    public function getDatosUpi($dataxxxx)
    {
        $selectxx = [
            "id_upi",
            "nombre",
            "sexo",
            "direccion",
            "id_localidad",
            "id_barrio",
            "telefonos",
            "correo_electronico",
            "ciclo_vital",
            "codigo_municipio",
        ];
        $respuest = GeUpi::select($selectxx)->where('id_upi', $dataxxxx['idxxxxxx'])->first();
        return $respuest;
    }
    public function getUpiMUT($dataxxxx)
    {
        $this->getHomlogar($dataxxxx);
    }

    public function getHomlogar($dataxxxx)
    {
        $depenuev = SisDepen::find(1);
        $depeanti = $this->getDatosUpi($dataxxxx);
        $sisdepen = new SisDepen();
        $sisdepen->nombre = $depeanti->nombre;
        $sisdepen->s_correo = $depeanti->correo_electronico;
        $parametr = Parametro::find(445);
        ddd($depeanti->toArray(), $parametr->toArray());
    }

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
            // throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
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
}
