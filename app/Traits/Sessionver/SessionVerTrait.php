<?php

namespace App\Traits\Sessionver;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Este trait se encarga de armar los botones que se utilizan en las vistas
 */
trait SessionVerTrait
{
    public function indexSession($dataxxxx)
    {
        Session([$dataxxxx['formular'] . 'ver_' . Auth::id() => true]);
    }


    public function verSession($dataxxxx)
    {
        Session::put($dataxxxx['formular'] . 'ver_' . Auth::id(), false);
    }


    public function vercrear($dataxxxx)
    {
        $vercrear = true;
        $value = Session::get($dataxxxx['formular'] . 'ver_' . Auth::id());
        if (!$value) {
            $vercrear = false;
        }
        return $vercrear;
    }
}
