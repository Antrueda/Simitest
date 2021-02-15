<?php

namespace App\Models\Simianti\Ba;

use Illuminate\Database\Eloquent\Model;

class ActividadesGenerarIngreso extends Model
{
    protected $connection = 'simiantiguo';
    // protected $table = 'ge_nnaj_documento';
    // protected $primaryKey = 'id_nnaj';

    protected $fillable = [
        'id',
        'id_habitabilidad',
        'id_actividades',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
//motivo vinculacion
//