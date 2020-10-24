<?php

namespace App\Rules;

use App\Models\consulta\CsdDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Contracts\Validation\Rule;

class ValidarCedula implements Rule
{
    private $_dataxxx;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($dataxxxx)
    {
        $this->_dataxxx = $dataxxxx;
    }
    /**
     * identificar si exte el documento en la tabla principal
     *
     * @param [array] $dataxxxx
     * @return $respuest
     */
    public function getFi($dataxxxx)
    {
        $respuest = true;
        $document = NnajDocu::where('s_documento', $dataxxxx['valuexxx'])->first();
        if ($document != null) {
            $respuest = false;
        }
        return $respuest;
    }


    /**
     * identificar si exte el documento en la cosulta social
     *
     * @param [array] $dataxxxx
     * @return $respuest
     */
    public function getCsd($dataxxxx)
    {
        $respuefi = $this->getFi($dataxxxx);
        $respucsd = true;
        /* se busca ese numero en consulta*/
        if ($respuefi) {
            $document = CsdDatosBasico::where(function ($queryxxx) use ($dataxxxx) {
                if ($this->_dataxxx['metodoxx'] == 2) { // editar registro
                    $queryxxx->whereNotIn('id', $this->_dataxxx['registro']);
                } else { //nuevo registro
                    $queryxxx->where('s_documento', $dataxxxx['valuexxx']);
                }
            })->first();
            if ($document != null) {
                $respucsd = false;
            }
        }
        return $respucsd;
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        $this->_dataxxx['cedulaxx']=$value;
        $respuest =true;
        switch ($this->_dataxxx['document']) {
            case 1:
                $respuest =$this->getCsd(['valuexxx'=>$value]);
                break;
            case 2:
                # code...
                break;
        }
        return $respuest;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "El número de documento {$this->_dataxxx['cedulaxx']} ya se encuentra en uso.";
    }
}
