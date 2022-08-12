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

        // Validamos si se selecciono una habilidad por item
        $Item1 = 0;
        $Item2 = 0;
        $Item3 = 0;
        $Item4 = 0;
        $Item5 = 0;
        $Item6 = 0;

        foreach ($habilida as $key => $value) {

            switch ($value[0]) {
                case "1":
                    $Item1++;
                    break;
                case "2":
                    $Item2++;
                 break;
                case "3":
                    $Item3++;
                break;
                case "4":
                    $Item4++;
                break;
                case "5":
                    $Item5++;
                break;
                case "6":
                    $Item6++;
                break;
            }

            if( $Item6==0||$Item5==0||$Item4==0 ||$Item3==0|| $Item2 ==0||$Item1==0){
                $respuest = false;                
                $this->messagex ='SE REQUIERE QUE SE SELECCIONE AL MENOS UNA HABILIDAD POR ITEM';
            
            }else{
                $respuest = true;
            }}
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
