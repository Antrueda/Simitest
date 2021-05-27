<?php

namespace App\Helpers\Fi;

class FiPestaniasHelper
{
    public static function active($dataxxxx)
    {
        return request()->is($dataxxxx['pathxxxx']) ? 'active' : '';
    }
}
