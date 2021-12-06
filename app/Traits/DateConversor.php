<?php

namespace App\Traits;

use Carbon\Carbon;

trait DateConversor
{

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat(
            'Y-m-d H:i:s',
            Carbon::parse($date)->toDateTimeString()
        )->format('d-m-Y h:i:s A');
    }



    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat(
            'Y-m-d H:i:s',
            Carbon::parse($date)->toDateTimeString()
        )->format('d-m-Y h:i:s A');
    }
}
