<?php

namespace App\Traits\Fi\Compfami;

use App\Rules\CedulaNnajRule;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CFRequestTrait
{
    public function getMensajesULT($dataxxxx)
    {
        $_mensaje = [
            'i_prm_parentesco_id.required' => 'Seleccione un parentesco con el nnaj',
            'i_prm_ocupacion_id.required' => 'Seleccione la acupación del componente familiar',
            'i_prm_vinculado_idipron_id.required' => 'Indique si estuvo vinculado',
            'i_prm_convive_nnaj_id.required' => 'Indique si convive con el nnaj',
            'prm_reprlega_id.required' => 'Indique si es el representante legal',
            'd_nacimiento.required' => 'Seleccione una fecha de nacimiento o digite la edad',
            's_telefono.required' => 'Ingrese un número de teléfono',
            's_documento.required' => 'Ingrese el número de documento',
            'sis_municipio_id.required' => 'Seleccione un municipio',
            'prm_tipodocu_id.required' => 'Seleccione tipo de documento',
            's_primer_nombre.required' => 'Ingrese el primer nombre',
            's_primer_apellido.required' => 'Ingrese el primere apellido',
        ];
        return $_mensaje;
    }
    public function getReglasULT($requestx,$dataxxxx)
    {
        $_reglasx = [
            'prm_tipodocu_id' => ['required'],
            'i_prm_parentesco_id' => ['required'],
            'i_prm_ocupacion_id' => ['required'],
            'i_prm_vinculado_idipron_id' => ['required'],
            'i_prm_convive_nnaj_id' => ['required'],
            'prm_reprlega_id' => ['required'],
            'd_nacimiento' => ['required'],
            's_telefono' => ['required'],
            's_documento' => ['required',new CedulaNnajRule($requestx,$dataxxxx)],
            'sis_municipio_id' => ['required'],
            's_primer_nombre' => ['required'],
            's_primer_apellido' => ['required'],
        ];
        return $_reglasx;
    }
}
