<?php

namespace App\Rules;

use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisLocalupz;
use Illuminate\Contracts\Validation\Rule;

class LocalidadUpzDuplicadRule implements Rule
{
    private $requestx;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($requestx)
    {
        $this->requestx = $requestx;
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
        $respuest=true;
        $sisdepeu = SisLocalupz::where('user_id', $this->requestx->user_id)->where('sis_depen_id', $this->requestx->sis_depen_id)->first();
        if ($sisdepeu != null) {
            if ($this->requestx->segments()[3] != $sisdepeu->id) {
                $respuest=false;
            }
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
        return 'La upz ya se encuentra en uso para la localidad seleccionada';
    }
}
