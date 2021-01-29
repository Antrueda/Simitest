<?php

namespace App\Traits\Puede;

use App\Helpers\Traductor\Traductor;


/**
 * realiza el redireccionamiento de cuerdo a la utilidad de cada método
 * los metodos crearalos colocando la palabar: TPuede al final del nombre ejem: getPuedeCargarTPuede
 * esto con el fin evitar duplicidad de métodos al utilizar varios traits
 */
trait PuedeTrait
{
    /**
     * permite realizar el redirecionamiento dependiendo de donde sea llamado
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getRedirectTPuede($dataxxxx)
    {
        return redirect()
            ->route($dataxxxx['routexxx'], $dataxxxx['parametr'])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * quitar el boton de editar y el usuario logueado no tenga la(s) upi(s)
     * del nnaj
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getPuedeCargarTPuede($dataxxxx)
    {
        $puedexxx = false;
        if (
            Traductor::getPuedeCargar(['nnajxxxx' => $dataxxxx['nnajxxxx']]) &&
            auth()->user()->can($dataxxxx['permisox'])
        ) {
            $puedexxx = true;
        }
        return $puedexxx;
    }
    /**
     * metodo general para redireccionar dependiendo de caso
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getPuedeTPuede($dataxxxx)
    {
        switch ($dataxxxx['casoxxxx']) {
            case 1:
                return $this->getPuedeCargarTPuede($dataxxxx);
                break;
        }
    }
}
