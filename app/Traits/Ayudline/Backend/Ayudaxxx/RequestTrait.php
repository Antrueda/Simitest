<?php

namespace App\Traits\Ayudline\Backend\Ayudaxxx;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait RequestTrait
{
    public function getMensajesULT($dataxxxx)
    {
        $_mensaje = [
            'titulo.required' => 'Ingrese el título',
            'titulo.unique' => 'El título ya se encuentra en uso',
            'titulo.max' => 'El máximo del título debe ser de 255 carracteres',
            'titulo.string' => 'El título debe ser texto',

            'cuerpo.required' => 'Ingrese la descripción',
            'cuerpo.string' => 'La descripción debe ser texto',
            'cuerpo.min' => 'El mínimo de la descripción debe ser de 2 carracteres',
        ];
        return $_mensaje;
    }
    public function getReglasULT($dataxxxx)
    {
        $unicoxxx = '';
        if ($dataxxxx['creaedit']) {
            $unicoxxx = ',titulo,' . $dataxxxx['requestx']->segments()[2];
        }

        $_reglasx = [
            'titulo' => [
                'required',
                'unique:ayudas' . $unicoxxx,
                'string',
                'max:255'
            ],
            'cuerpo' => [
                'required',
                'string',
                'min:2',
            ],
        ];


        return $_reglasx;
    }
}
