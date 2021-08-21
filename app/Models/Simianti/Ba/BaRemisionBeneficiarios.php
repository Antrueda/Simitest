<?php

namespace App\Models\Simianti\Ba;

use Illuminate\Database\Eloquent\Model;

class BaRemisionBeneficiarios extends Model
{
    protected $connection = 'simiantiguo';
     protected $table = 'ba_remision_beneficiarios';
    // protected $primaryKey = 'id_nnaj';

    protected $fillable = [
        'id_remision',
        'envia',
        'recibe',
        'id_responsable_remision',
        'id_responsable_recibo',
        'id_persona_entrega',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'observaciones',
        'tipo_remision',
        'id_servicio',
        'fecha',
    ];
    public function padre()
    {
        return $this->belongsTo(BaTerritorio::class,'id_padre');
    }
}
