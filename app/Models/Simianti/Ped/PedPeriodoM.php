<?php

namespace App\Models\Simianti\Ped;

use Illuminate\Database\Eloquent\Model;

class PedPeriodoM extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ped_periodo_m';
    protected $primaryKey = 'id_periodo';

    protected $fillable = [
        'id_periodo',
        'periodo',
        'ano',
        'descripcion',
       
        
    ];
}
