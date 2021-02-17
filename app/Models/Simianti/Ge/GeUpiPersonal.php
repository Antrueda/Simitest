<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GeUpiPersonal extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_upi_personal';
    protected $primaryKey = 'id_personal';
    protected $fillable = [
        'id_upi',
        'id_personal',
        'responsable',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
