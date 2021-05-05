<?php

namespace App\Models\Simianti\Tr;

use Illuminate\Database\Eloquent\Model;

class TrVespa extends Model
{
    protected $table = 'tr_vespa';
    protected $primaryKey = 'id_vespa';
    protected $connection = 'simiantiguo';
    protected $fillable = [
        'fecha_consulta',
        'id_ocupac_oficio',
        'tratam_previos',
        'acudio_instit',
        'id_nnaj',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'droga_inyectada',
        'reduccion_consumo',
        'idipron_reduccion',
        'incremento_consumo',
        'razon',
        'id_profesional',
        'ttttttt',
        'id_ficha_ingreso',
        'origen',
        'id_upi',
    ];
}
