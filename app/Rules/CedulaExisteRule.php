<?php

namespace App\Rules;


use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Contracts\Validation\Rule;

class CedulaExisteRule implements Rule
{
    private $dataxxxx;
    private $mansajex = '';
    private $respuest = true;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($dataxxxx)
    {
        $this->dataxxxx = $dataxxxx;
    }
    private function getExisteCedula($value)
    {

        return NnajDocu::join('fi_datos_basicos', 'nnaj_docus.fi_datos_basico_id', '=', 'fi_datos_basicos.id')
            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->where(function ($queryxxx) use ($value) {
                $queryxxx->where('nnaj_docus.s_documento', $value);
               
                if (isset($this->dataxxxx['dotobasi'])) {
                    $queryxxx->whereNotIn('nnaj_docus.fi_datos_basico_id', [$this->dataxxxx['dotobasi']]);
                }
            })
            ->first([
                'fi_datos_basicos.id as datobasi',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_nnajs.prm_escomfam_id',
            ]);
    }
    private function getMensaje( $value)
    {
        $respuest= $this->getExisteCedula($value);
        if (!is_null($respuest)) {
            $this->mansajex = 'El número de documento: ' . $value . ' se encuentra en uso por '
                . $respuest->s_primer_nombre.' '
                . $respuest->s_segundo_nombre.' '
                . $respuest->s_primer_apellido.' '
                . $respuest->s_segundo_apellido;
            $this->respuest = false;
            switch ($respuest->prm_escomfam_id) {
                case 227:
                    $this->mansajex .= ', que es un NNAJ';
                    break;
                case 228:
                    $this->mansajex .= ', que es un componente familiar';
                    break;
                default:
                    $this->mansajex .= ', que es un contacto único';
                    break;
            }
        }
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
        $this->getMensaje($value);
        return $this->respuest;
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
