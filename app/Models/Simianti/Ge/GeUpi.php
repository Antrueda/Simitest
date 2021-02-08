<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GeUpi extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_upi';
    protected $primaryKey = 'id_upi';

    protected $fillable = [
        'id_upi',
        'nombre',
        'sexo',
        'direccion',
        'id_localidad',
        'id_barrio',
        'telefonos',
        'correo_electronico',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'id_area_padre',
        'tipo_area',
        'estado',
        'ciclo_vital',
        'codigo_municipio',
        'tiempo_actualizacion',
        'tipo_dependencia',
        'tipo_egreso',
        'centro_costo',
        'auxiliar',
        'capacidad_instalada',
        'observaciones',
    ];
}
