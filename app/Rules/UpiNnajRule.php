<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UpiNnajRule implements Rule
{
    private $dataxxxx;
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
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
