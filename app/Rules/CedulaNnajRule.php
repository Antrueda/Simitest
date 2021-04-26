<?php

namespace App\Rules;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Contracts\Validation\Rule;

class CedulaNnajRule implements Rule
{
    private $requestx;
    private $datobasi;
    private $dataxxxx;
    private $messagex;
    private $respuest;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($requestx, $dataxxxx)
    {
        $this->requestx = $requestx;
        $this->dataxxxx = $dataxxxx;
    }
    /**
     * armar el nombre del nnaj
     *
     * @return $nombrexx
     */
    public function getNombre()
    {
        $nombrexx =
            $this->datobasi->s_primer_nombre . ' ' .
            $this->datobasi->s_segundo_nombre . ' ' .
            $this->datobasi->s_primer_apellido . ' ' .
            $this->datobasi->s_segundo_apellido;
        return $nombrexx;
    }
    /**
     * valida que el documento ya exista
     *
     * @return $objetoxx
     */
    public function getDocumentoExiste()
    {
        $this->respuest = true;
        $objetoxx = NnajDocu::where('s_documento', $this->requestx->s_documento)->first();
        if ($objetoxx != null) {
            $this->datobasi = $objetoxx->fi_datos_basico;
            $this->messagex = "La cédula: {$this->requestx->s_documento} ya existe y pretences al nnaj: " . $this->getNombre();
            $this->respuest = false;
        }
        return $objetoxx;
    }
    /**
     * encontrar el componente familiar
     *
     * @return void
     */
    public function getCompfami()
    {
        $compfami = $this
            ->datobasi
            ->sis_nnaj
            ->fi_compfamis
            ->where('sis_nnajnnaj_id', $this->requestx->segments()[1])
            ->first();
        return $compfami;
    }

    public function getRespustaCNR()
    {
        $this->messagex = "La cédula: {$this->requestx->s_documento} ya existe como compenente familiar y perteneces al nnaj: " . $this->getNombre();
        $this->respuest = false;
    }
    /**
     * validar ya está creado como componente familiar cuando se está creando el registro
     *
     * @return void
     */
    public function getCrearCNR()
    {
        $this->getDocumentoExiste();
        // validar que esté creado como componente familiar
        if (!$this->respuest) { // la cédula exite
            $this->respuest = true;
            if ($this->getCompfami() != null) { // ya está como componente familiar
                $this->getRespustaCNR();
            }
        }
    }
    /**
     * Valida que el numero de documento no se encuentra asociado a otro registro
     *
     * @return $cedulaxx
     */
    public function getOtroComponenteFamiliar()
    {
        $compfami = FiCompfami::join('sis_nnajs', 'fi_compfamis.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->where('fi_compfamis.id','=!', [$this->requestx->segments()[4]])
            ->where('s_documento', $this->requestx->s_documento)
            ->first();
        // verificar que la cédula ya la tenga otro nnaj
        $cedulaxx = $this->getDocumentoExiste();
        if ($compfami != null) {
            $this->getRespustaCNR();
        } else {
            $this->respuest = true;
        }
        return  $cedulaxx;
    }
    /**
     * Validar que solo se puedan editar registros que no sean nnaj
     *
     * @return void
     */
    public function getEditarCNR()
    {
        $cedulaxx = $this->getOtroComponenteFamiliar();
        if ($this->respuest && $cedulaxx != null) {
            // if ($cedulaxx->fi_datos_basico->sis_nnaj->prm_escomfam_id == 227) {
            //     $this->respuest = false;
            //     $this->messagex = "El registro que está intentando modificar es de un nnaj y por lo tanto no es posible, la información debe ser modificada por datos básicos";
            // }
        }
    }

    /**
     * determina si pasa la validación.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // se esttá editando el retistro
        if ($this->dataxxxx["creaedit"]) {
            $this->getEditarCNR();
        } else { // se está crenado el registro
            $this->getCrearCNR();
        }

        return $this->respuest;
    }

    /**
     * Mensaje enviado de la validación.
     *
     * @return string
     */
    public function message()
    {
        return $this->messagex;
    }
}
