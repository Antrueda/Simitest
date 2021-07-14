<?php

namespace App\Models\Simianti\Ba;

use Illuminate\Database\Eloquent\Model;

class BaRemisionBeneficiarios extends Model
{
    protected $connection = 'simiantiguo';
     protected $table = 'ba_remision_beneficiarios';
    // protected $primaryKey = 'id_nnaj';

    protected $fillable = [
        'ID_REMISION',
        'ENVIA',
        'RECIBE',
        'ID_RESPONSABLE_REMISION',
        'ID_RESPONSABLE_RECIBO',
        'ID_PERSONA_ENTREGA',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'OBSERVACIONES',
        'TIPO_REMISION',
        'ID_SERVICIO',
        'FECHA',
    ];
    public function padre()
    {
        return $this->belongsTo(BaTerritorio::class,'id_padre');
    }
}
