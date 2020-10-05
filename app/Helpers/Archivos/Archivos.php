<?php

namespace App\Helpers\Archivos;

use Illuminate\Support\Facades\Storage;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Archivos
 *
 * @author Ing. José Dúmar Jiménez Ruíz (nowen21@gmail.com)
 */
class Archivos
{

    public function __construct()
    {
    }

    private static function guardarArchivoCarpeta($dataxxxx)
    {
        $rutaxxxx = false;
        if ($dataxxxx['requestx']->hasFile($dataxxxx['nombarch'])) {
            $archivox = $dataxxxx['nomguard'].'_' . str_replace(['-', ' ', ':'], "_", date('Y-m-d H:m:s', time())) .
                '.' . $dataxxxx['requestx']->file($dataxxxx['nombarch'])->extension();
            $rutaxxxx = $dataxxxx['requestx']->file($dataxxxx['nombarch'])->storeAs( 'Archivos/'.$dataxxxx['rutaxxxx'], $archivox,'public');
        }

        return $rutaxxxx;
    }

    public static function getRuta($dataxxxx)
    {
        return Archivos::guardarArchivoCarpeta($dataxxxx);
    }
}
