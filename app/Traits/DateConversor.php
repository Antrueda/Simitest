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

    public function getDNacimientoAttribute($date)
    {
        return Carbon::createFromFormat(
            'Y-m-d H:i:s',
            Carbon::parse($date)->toDateTimeString()
        )->format('Y-m-d');
    }

    public function setDNacimientoAttribute($value)
    {
        return $this->attributes =  Carbon::createFromFormat(
            'Y-m-d H:i:s',
            Carbon::parse($value)->toDateTimeString()
        )->format('Y-m-d');
    }

    public function getEdadAttribute()
    {
        return Carbon::parse($this->d_nacimiento)->age;
    }
}
