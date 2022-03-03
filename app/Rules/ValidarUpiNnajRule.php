<?php

namespace App\Rules;

use App\Models\fichaIngreso\NnajUpi;
use Illuminate\Contracts\Validation\Rule;

/**
 * Valida si el nnaj ya tiene asignada la upi que se le está asignando
 */
class ValidarUpiNnajRule implements Rule
{
    private $dataxxxx;
    private $upixxxxx = '';
    private $mansajex = '';
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
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $metodoxx = $this->dataxxxx['metodoxx'];
        return $this->$metodoxx($value);
    }
    public function getConsulta($value, $actualiz = false)
    {
        
        $registro = NnajUpi::where(function ($queryxxx) use ($value, $actualiz) {
            $queryxxx->where('sis_depen_id', $value);
            if ($actualiz) { 
                $queryxxx->where('id', '!=', $this->dataxxxx['registro']);
            }
        })
            ->first();
        if (!is_null($registro )) {
            $this->upixxxxx = $registro->sis_depen->nombre;
        }
        return $registro;
    }

    public function getNuevo($value)
    {
        $respuest = true;
        if (!is_null($this->getConsulta($value))) {
            $this->mansajex = "La dependencia : $this->upixxxxx ya la tiene asignada el NNAJ";
            $respuest = false;
        }
        return $respuest;
    }

    public function getActualizar($value)
    {
        $respuest = true;
        if (!is_null($this->getConsulta($value, true))) {
            $this->mansajex = "La dependencia : $this->upixxxxx ya la tiene asignada el NNAJ";
            $respuest = false;
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
        return $this->mansajex;
    }
}
