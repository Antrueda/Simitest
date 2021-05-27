<?php

namespace App\Traits\Utilidades;

trait DefaultItem

{

public function setUserCreaIdAttribute($itemvalue)
{
   $this->attributes['user_crea_id'] = auth()->user()->id; //Para el usuario autenticado

}

public function setUserEditaIdAttribute($itemvalue)
{
   $this->attributes['user_edita_id'] = auth()->user()->id; //Para el usuario que edita autenticado
}

public function defaultSisEsta($value)
    {
        return (is_null($value) || $value == 1 ) ? 1 : 2 ;
    }


}