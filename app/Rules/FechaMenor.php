<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FechaMenor implements Rule
{
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
        $fecha_actual =date("Y-m-d");
        $fecha_actual = strtotime($fecha_actual);
        $fecha_entrada = strtotime($value);
        return $fecha_entrada > $fecha_actual ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'No está permitido ingresar información con fechas superiores a hoy.';
    }
}
