<?php

namespace app\Rules;

use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Contracts\Validation\Rule;

class NnajComposicionFamiliarRule implements Rule
{
    private $requestx;
    private $datobasi;

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
        $respuest = true;
        $objetoxx = NnajDocu::where('s_documento', $this->requestx->s_documento)->first();
        if ($objetoxx != null) { // la cédula exite
            $this->datobasi = $objetoxx->fi_datos_basico;
            $compfami = $this->datobasi->sis_nnaj->fi_compfamis
                ->where('sis_nnajnnaj_id', $this->requestx->segments()[1])
                ->first();
            if ($compfami != null) { // la cédula encontrada hace parte del componente familiar del nnaj
                $respuest = false;
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
        $nombrexx = $this->datobasi->s_primer_nombre . ' ' .
            $this->datobasi->s_segundo_nombre . ' ' .
            $this->datobasi->s_primer_apellido . ' ' .
            $this->datobasi->s_segundo_apellido;
        return "La cédula: {$this->requestx->s_documento} ya existe y pretences al nnaj: {$nombrexx}";
    }
}
