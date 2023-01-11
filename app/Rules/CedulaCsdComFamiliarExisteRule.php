<?php

namespace App\Rules;

use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\pivotes\CsdSisNnaj;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
        $this->dataxxxx = $dataxxxx;
    }

    public function getNuevo($value)
    {
        $csdsisnn = CsdSisNnaj::where('id', $this->dataxxxx['segments'][0])->first();
        $respuest = true;
        $registro = CsdComFamiliar::select('csd_com_familiars.id')
            ->where('csd_com_familiars.s_documento', $value)
            ->where('csd_com_familiars.csd_id',  $csdsisnn->csd_id)
            ->first();
        if (!is_null($registro)) {
            $this->mansajex = "El número de documento: $value ya existe";
            $respuest = false;
        }
        return $respuest;
    }

    public function getActualiza($value)
    {
        $csdsisnn = CsdSisNnaj::where('id', $this->dataxxxx['segments'][0])->first();
        // if (Auth::user()->s_documento == '17496705') {

        //  
        // }
        $respuest = true;
        $registro = CsdComFamiliar::select('csd_com_familiars.id')
            ->where('csd_com_familiars.s_documento', $value)
            ->where('csd_com_familiars.id', '!=', $this->dataxxxx['registro'])
            ->where('csd_com_familiars.csd_id',  $csdsisnn->csd_id)
            ->first();
        if (!is_null($registro)) {
            $this->mansajex = "El número de documento: $value ya existe";
            $respuest = false;
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
        $metodoxx = $this->dataxxxx['metodoxx'];
        return $this->$metodoxx($value);
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
