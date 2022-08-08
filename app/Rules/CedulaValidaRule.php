<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CedulaValidaRule implements Rule
{
    private $mansajex = '';
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $respuest = true;

        $totalxxx = strlen($value);

        if ((int)$totalxxx < 6) {
            $respuest = false;
            $this->mansajex = "El número de documento: $value no es válido, debe tener al menos 6 dígitos";
        }

        if ((int)$value==0) {
            $respuest = false;
            $this->mansajex = "El número de documento: $value no es válido";
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
