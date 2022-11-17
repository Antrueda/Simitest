<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ValidarEdadNnajRule implements Rule
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
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $respuest = true;
        $fechaxxx = explode('-', $value);
        $edadxxxx = Carbon::createFromDate($fechaxxx[0], $fechaxxx[1], $fechaxxx[2])->age;
        if ($edadxxxx < 6 || $edadxxxx >= 29) {
            $respuest = false;
        }
        return  $respuest;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La eded del NNAJ debe estar entre 6 y 28 años';
    }
}
