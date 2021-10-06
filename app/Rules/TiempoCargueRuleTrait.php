<?php

namespace App\Rules;

use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Contracts\Validation\Rule;

class TiempoCargueRuleTrait implements Rule
{
    use  ManageTimeTrait;
    private $dataxxxx;
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
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $upixxxxx=0;
        if ($this->dataxxxx['estoyenx']==2) {
            $upixxxxx=$this->dataxxxx['upixxxxx'];
        }
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => $this->dataxxxx['estoyenx'], // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $value,
            'upixxxxx' => $upixxxxx
        ]);
        $respuest = true;
        if (! $puedexxx['tienperm']) {
            $respuest = false;
            $this->mensajex =  $puedexxx['msnxxxxx'];
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
        return $this->mensajex;
    }
}
