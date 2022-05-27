<?php

namespace App\Rules\Acciones\Individuales\Educacion\CuestionarioGustos;

use Illuminate\Contracts\Validation\Rule;

class HabilidadesRule implements Rule
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
    public function passes($attribute, $habilida)
    {
       // dd( $habilida); // 0 => "1_1"
        $respuest = true;
        $itemsxxx = [];
        foreach ($habilida as $key => $value) {
            $itemxxxx = explode('_', $value);

            if (!array_key_exists($itemxxxx[0], $itemsxxx)) {
                $itemsxxx[$itemxxxx[0]] = 1;
            } else {
                $itemsxxx[$itemxxxx[0]] += 1;
            }
        }

        foreach ($itemsxxx as $key => $value) {
            if ($value > 6) {
                $respuest = false;
                $this->messagex = "El item: " . $key . " tiene: " . $value . ' habilidades seleccionadas y solo se pueden seleccionar 6 por item';
                break;
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
        return $this->messagex;
    }
}
