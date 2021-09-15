<?php

namespace App\Models\Simianti\Ped;

use Illuminate\Database\Eloquent\Model;

class PedEstadoM extends Model
{
    protected $connection = 'simiantiguo';
     protected $table = 'ped_estado_m';
    // protected $primaryKey = 'id_nnaj';

    protected $fillable = [
        'id_promocion',
        'matricula_id',
        'fecha',
        'usuario_insercion',
        'fecha_insercion',
        'usuario_modificacion',
        'fecha_modificacion',
        'estado',
        'fecha_grado',
        
        
    ];

}
