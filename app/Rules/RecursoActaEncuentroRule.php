<?php

namespace App\Rules;

use App\Models\Actaencu\AeRecuadmi;
use Illuminate\Contracts\Validation\Rule;

/**
 * Validar duplicidad del recurso en la adaministracion para acta de encuentro
 */
class RecursoActaEncuentroRule implements Rule
{

    private $dataxxxx;
    private $respuest=true;
    private $mensajex = '';

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($dataxxxx)
    {
        $this->dataxxxx = $dataxxxx;
    }


    /**
     * validar cuando se esté insertando un recurso
     *
     * @return void
     */
    private function getInsertar($value)
    {
        $reucurso=AeRecuadmi::where('s_recurso',$value)
        ->where('prm_trecurso_id',$this->dataxxxx['dataxxxx']->prm_trecurso_id)->first();
        if (!is_null($reucurso)) {
            $this->respuest=false;
        }

    }
    /**
     * validar cuando se esté actualizando un recurso
     *
     * @return void
     */
    private function getActualizar($value)
    {
        $reucurso=AeRecuadmi::where('s_recurso',$value)
        ->where('prm_trecurso_id',$this->dataxxxx['dataxxxx']->prm_trecurso_id)
        ->whereNotIn('id',[$this->dataxxxx['dataxxxx']->segments()[3]])
        ->first();
        if (!is_null($reucurso)) {
            $this->respuest=false;
        }
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
        if (!isset($this->dataxxxx['creaupda'])) {
            $this->dataxxxx['creaupda'] = true;
        }

        if ($this->dataxxxx['creaupda']) {
            $this->getInsertar($value);
        } else {
            $this->getActualizar($value);
        }
        $this->mensajex="El recurso: $value ya se encuentra en uso";
        return $this->respuest;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->mensajex;
    }
}
