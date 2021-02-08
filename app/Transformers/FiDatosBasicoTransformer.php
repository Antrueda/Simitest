<?php

namespace App\Transformers;

use App\Models\fichaIngreso\FiDatosBasico;
use League\Fractal\TransformerAbstract;

class FiDatosBasicoTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['fiDatosBasico'];

    /**
     * @param \App\FiDatosBasico $fiDatosBasico
     * @return array
     */
    public function transform(FiDatosBasico $fiDatosBasico)
    {
        $fiDatosBasico->botonexx = '';
        return $fiDatosBasico;
    }

    /**
     * @param \App\FiDatosBasico $fiDatosBasicoes
     * @return \League\Fractal\Resource\Collection
     */
    public function includeFiDatosBasico(FiDatosBasico $fiDatosBasico)
    {
        return $this->collection($fiDatosBasico->fiDatosBasico, new FiDatosBasicoTransformer);
    }
}
