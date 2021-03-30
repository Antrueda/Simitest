<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GeUpiNnaj extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_upi_nnaj';
    protected $primaryKey = 'id_upi_nnaj';
    public $timestamps = false;
    protected $fillable = [
        'id_upi_nnaj',
        'id_upi',
        'motivo',
        'tiempo',
        'modalidad',
        'anio',
        'id_nnaj',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'id_valoracion_inicial',
        'fecha_ingreso',
        'fecha_egreso',
        'estado',
        'origen',
        'fuente',
        'flag',
        'servicio',
        'estado_compartido',
    ];
}
