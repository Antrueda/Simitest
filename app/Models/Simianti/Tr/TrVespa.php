<?php

namespace App\Models\Simianti\Tr;

use Illuminate\Database\Eloquent\Model;

class TrVespa extends Model
{
    public $timestamps = false;
    protected $table = 'tr_vespa';
    protected $primaryKey = 'id_vespa';
    protected $connection = 'simiantiguo';
    protected $fillable = [
        'id_vespa',
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

    public function tr_segui_consumo_spa()
    {
        return $this->hasMany(TrSeguiConsumoSpa::class,'id_vespa');
    }
}
