<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class TiempoCargueRule implements Rule
{

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

        $respuest = true;
        if (!$this->dataxxxx['puedexxx']['tienperm']) {
            $respuest = false;
            $this->mensajex = $this->dataxxxx['puedexxx']['msnxxxxx'];
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
