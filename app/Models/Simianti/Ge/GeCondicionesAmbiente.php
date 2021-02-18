<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GeCondicionesAmbiente extends Model
{
    protected $connection = 'simiantiguo';
     protected $table = 'ge_condiciones_ambiente';

     protected $fillable =['id_condicion_ambiente',
    'id_direccion',
    'id_tipo_condicion',
    'usuario_insercion',
    'fecha_insercion',
    'usuario_modificacion',
    'fecha_modificacion',
];
}
