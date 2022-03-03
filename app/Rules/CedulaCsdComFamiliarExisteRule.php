<?php

namespace App\Rules;

use App\Models\consulta\CsdComFamiliar;
use Illuminate\Contracts\Validation\Rule;

class CedulaCsdComFamiliarExisteRule implements Rule
{
    private $dataxxxx;
    private $mansajex = '';
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($dataxxxx)
    {
        $this->dataxxxx=$dataxxxx;
    }

    public function getNuevo($value)
    {
        $respuest=true;
        $registro = CsdComFamiliar::select('csd_com_familiars.id')
        ->where('csd_com_familiars.s_documento', $value)
        ->first();
        if (!is_null($registro)) {
            $this->mansajex = "El número de documento: $value ya existe";
            $respuest=false;
        }
        return $respuest;
    }

    public function getActualiza($value)
    {
        $respuest=true;
        $registro = CsdComFamiliar::select('csd_com_familiars.id')
        ->where('csd_com_familiars.s_documento', $value)
        ->where('csd_com_familiars.id','!=', $this->dataxxxx['registro'])
        ->first();
        if (!is_null($registro)) {
            $this->mansajex = "El número de documento: $value ya existe";
            $respuest=false;
        }
        return $respuest;
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
        $metodoxx=$this->dataxxxx['metodoxx'];
        return $this->$metodoxx( $value);
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
